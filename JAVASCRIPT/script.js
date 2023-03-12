//------------------------------SLIDER--------------------------
const imgItem = document.querySelectorAll(".aspect-ratio-169 img")
const imgItemContainer = document.querySelector(".aspect-ratio-169")
const dotItem = document.querySelectorAll(".dot")
let index = 0;
let imgLeng = imgItem.length
imgItem.forEach(function(image,index){
    image.style.left = index*100 + "%"
    dotItem[index].addEventListener("click",function(){
    slideRun (index)
    })
})
function slider (){
    index++;
    if(index >= imgLeng){index=0}
  
    slideRun (index)
}
function slideRun (index) {
    imgItemContainer.style.left = "-" + index*100 + "%"
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active");
}

setInterval (slider,5000)




const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
   const X = this.pageYOffset;
 if(X>1){toP.classList.add("active")}
 else {
     toP.classList.remove("active")
 }
})
//------------------------------------Menu-SLIDEBAR-CARTEGORY-------------------
const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu,index){
  menu.addEventListener("click",function(){
   menu.classList.toggle("block")
  })
})
//--------------------------------------PRODUCT----------------------
const bigImg = document.querySelector(".product-content-left-big-img img")
const smalImg =  document.querySelectorAll(".product-content-left-small-img img")
smalImg.forEach(function(imgItem,X){
 imgItem.addEventListener("click",function(){
   bigImg.src = imgItem.src
 })
})


const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if(baoquan){
 baoquan.addEventListener("click", function(){
   document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
   document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
 })
}
if(chitiet){
 chitiet.addEventListener("click", function(){
   document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
   document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
 })
}
const butTon = document.querySelector(".product-content-right-bottom-top")
if(butTon){
 butTon.addEventListener("click", function(){
   document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
 })
}
// Dictionary
const dictionary_overview = document.querySelector(".dictionary-overview"),
searchInput = dictionary_overview.querySelector("input"),
volume = dictionary_overview.querySelector(".word i"),
infoText = dictionary_overview.querySelector(".info-text"),
synonyms = dictionary_overview.querySelector(".synonyms .list"),
removeIcon = dictionary_overview.querySelector(".search span");
let audio;

function data(result, word){
    if(result.title){
        infoText.innerHTML = `Không tìm thấy từ <span>"${word}"</span>. Hãy nhập chính xác từ mà bạn muốn tìm.`;
    }else{
        dictionary_overview.classList.add("active");
        let definitions = result[0].meanings[0].definitions[0],
        phontetics = `${result[0].meanings[0].partOfSpeech}  /${result[0].phonetics[0].text}/`;
        document.querySelector(".word p").innerText = result[0].word;
        document.querySelector(".word span").innerText = phontetics;
        document.querySelector(".meaning span").innerText = definitions.definition;
        document.querySelector(".example span").innerText = definitions.example;
        audio = new Audio("https:" + result[0].phonetics[0].audio);

        if(definitions.synonyms[0] == undefined){
            synonyms.parentElement.style.display = "none";
        }else{
            synonyms.parentElement.style.display = "block";
            synonyms.innerHTML = "";
            for (let i = 0; i < 5; i++) {
                let tag = `<span onclick="search('${definitions.synonyms[i]}')">${definitions.synonyms[i]},</span>`;
                tag = i == 4 ? tag = `<span onclick="search('${definitions.synonyms[i]}')">${definitions.synonyms[4]}</span>` : tag;
                synonyms.insertAdjacentHTML("beforeend", tag);
            }
        }
    }
}

function search(word){
    fetchApi(word);
    searchInput.value = word;
}

function fetchApi(word){
    dictionary_overview.classList.remove("active");
    infoText.style.color = "#000";
    infoText.innerHTML = `Đang tìm kiếm từ <span>"${word}"</span>`;
    let url = `https://api.dictionaryapi.dev/api/v2/entries/en/${word}`;
    fetch(url).then(response => response.json()).then(result => data(result, word)).catch(() =>{
        infoText.innerHTML = `Can't find the meaning of <span>"${word}"</span>. Please, try to search for another word.`;
    });
}

searchInput.addEventListener("keyup", e =>{
    let word = e.target.value.replace(/\s+/g, ' ');
    if(e.key == "Enter" && word){
        fetchApi(word);
    }
});

volume.addEventListener("click", ()=>{
    volume.style.color = "#4D59FB";
    audio.play();
    setTimeout(() =>{
        volume.style.color = "#999";
    }, 800);
});

removeIcon.addEventListener("click", ()=>{
    searchInput.value = "";
    searchInput.focus();
    dictionary_overview.classList.remove("active");
    infoText.style.color = "#9A9A9A";
    infoText.innerHTML = "Nhập từ bạn muốn tìm kiếm.";
});
                       