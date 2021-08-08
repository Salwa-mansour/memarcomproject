// popup widow code
// let showbtn = document.querySelector('.show-btn')
// let hidenContainer= document.querySelector(".trasperant-container")
// let closeBtn= document.querySelector(".close-button")
function showform(){
    showbtn.addEventListener("click",function(){
        // alert("You Awsom!");
        hidenContainer.style.transform = "translate3d(0,0,0)";
    })
}
function hidefrom(){
    closeBtn.addEventListener("click",function(){
    hidenContainer.style.transform = " translate3d(0,-100%,0)"} )
   }
// showform();
// hidefrom();
// console.log(hidenContainer.innerHTML)
console.log(document.getElementsByClassName('show-btn'));
let tabs=document.querySelector('.nav.nav-tabs ') ;
// console.log(tabs)
function tabChange(){
   tabs.addEventListener('click',function(e){
      tabLinks=Array.from(tabs.children );
   
    tabLinks.forEach(tab => {
        tab.classList.remove('active');
        console.log(tab)
    });
   e.target.classList.add('active');
  
} ) ;
   
}
// tabChange();