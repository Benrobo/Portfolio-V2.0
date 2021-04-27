
window.addEventListener("DOMContentLoaded", (e)=>{
 fetchProj()
})

function fetchProj(){
    let procont = document.querySelector(".proj-count");
    let url = "https://api.github.com/users/benrobo";
    let arr = [];

    fetch(url)
    .then((res)=> res.json())
    .then((data)=>{
        arr.push(data);
        
        arr.forEach((el) => {
            let repo = el.public_repos;
            procont.innerHTML = repo;
        });
    }) 
}












