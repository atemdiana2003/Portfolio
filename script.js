const btn = document.getElementById("themeBtn");

btn.onclick = () => {
document.body.classList.toggle("dark");
if(window.location.search.includes("success")){
alert("Message sent successfully!");}
};