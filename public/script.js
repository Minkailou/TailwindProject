// Mobile navbar toggle
var btn = document.getElementById("btn-mobile"),
    hamburger = document.getElementById("hamburger"),
    menu = document.getElementById("mobile-menu"),
    content = document.getElementById("mobile-menu-content")

btn.addEventListener("click", () => {
    hamburger.classList.toggle('expand')
    menu.classList.toggle("opacity-100");
    content.classList.toggle("hidden");
});

// Typing effect
var word = 0,
    text = 'LOUISITE._GUSTAVO.',
    speed = 200,
    heading1 = document.getElementById('first-name'),
    flag = 0,
    flag2 = 0;
    
window.onload = function typing(){
    if (word < text.length){
        if (flag == 1){
            if (text.charAt(word) === 'S'){
                flag--
                word+=5
            }
            else {
                var currentH1 = heading1.innerText;

                heading1.innerText = currentH1.substr(0, currentH1.length - 1)
                word--
            }
        }
        else if (text.charAt(word) === '_'){
            heading1 = document.getElementById('last-name')
            word++
        }
        else if (text.charAt(word) === '.' && text.charAt(word+1) === '_'){
            heading1.innerText += text.charAt(word)
            flag++
	    flag2++
        }
        else {
            heading1.innerText += text.charAt(word)
            word++
        }

        if (flag2){
            setTimeout(typing, 1000)
            flag2--
        }
        else
            setTimeout(typing, speed)
    }
    else{
    	document.getElementById('vertical-bar').classList.add('animate-blink')
    }
}