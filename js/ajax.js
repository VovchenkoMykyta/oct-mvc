function getAllTasks(){
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/getalltasks');
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4){
            if(xhr.status === 200){
                alert('we get response')
            }else{
                console.error('some problems with get all tasks')
            }
        }
    };
}

