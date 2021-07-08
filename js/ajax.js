function getAllTasks(){
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/getalltasks');
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4){
            if(xhr.status === 200){
                let tasksJSON = xhr.responseText;
                let tasks = JSON.parse(tasksJSON);
                let tasksHTML = tasks.reduce(function (total, task) {
                    return total + '<li>' + task.name + '</li>';
                }, '<ul>') + '</ul>';
                let taskDiv = document.getElementById('tasks');
                taskDiv.innerHTML = tasksHTML;
            }else{
                console.error('some problems with get all tasks')
            }
        }
    };
    xhr.send();
}

let loadBtn = document.getElementById('load_tasks');
loadBtn.onclick = function () {
    getAllTasks();
};

let createForm = document.forms.task_create;
createForm.onsubmit = function (event) {
    let name = this.elements.name.value;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/createtask');
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4){
            if(xhr.status === 201){
                alert('task created');
                //если добавление успешно, то нужно перерисовать список задач
                getAllTasks();
            }else{
                console.error('some problems with create task')
            }
        }
    };
    xhr.send('name='+name);

    event.preventDefault();
};