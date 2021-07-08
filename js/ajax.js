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