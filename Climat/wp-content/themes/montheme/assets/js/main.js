const tl = new TimelineLite ()

const enableInterraction = () => {
    const plusIcon = document.querySelector('.plus-icon')
    const backgroundImage = document.querySelector('.background--image')
    const plus_intro_part = document.querySelector('.plus-intro-part')
    const intro_section__global_container = document.querySelector('.intro-section__global-container')
    const plus_icon__line_2 = document.querySelector('.plus-icon__line-2')
    
    plus_intro_part.style.background = `#${plus_intro_part.dataset.color}`

    let open = true
    let click_cross = 0
    plusIcon.addEventListener('click', () => {
        if(click_cross % 2 == 0)
        {
            TweenLite.to(plus_icon__line_2, .3, {autoAlpha: 0})
            click_cross++
        }
        else
        {
            TweenLite.to(plus_icon__line_2, .3, {autoAlpha: 1})
            click_cross++
        }

        if(open) {
            const tlplus = new TimelineLite()
            tlplus
                .set([plusIcon],{zIndex: 3})
                .to(backgroundImage, 1.5, {xPercent: -55, ease: Expo.easeInOut})
                .to(plus_intro_part, 1.5, {xPercent: -100, ease: Expo.easeInOut},'-=1.5')
                .to(intro_section__global_container, .5,{scale: .8  },'-=1')
                
            open = false
        } else {
            const tlplus = new TimelineLite()
            tlplus
                .to(backgroundImage, 1.5, {xPercent: 0, ease: Expo.easeInOut})
                .to(plus_intro_part, 1.5, {xPercent: 0, ease: Expo.easeInOut},'-=1.5')                
                .to(intro_section__global_container, .3,{scale: 1, yPercent: 0},'-=1')
                
            open = true
        }
    })
}

const enableMenu = () => {
    if(document.querySelector('.conclusion--btn')) {
        const btn = document.querySelector('.conclusion--btn')
        btn.addEventListener('click', (e) => {
            e.preventDefault()
            menuCTA.click()
        })
    }
    const menuCTA = document.querySelector('.CTA_menu')
    const menu = document.querySelector('.menu__container')
    let open = false
    
    menuCTA.addEventListener('click', () => {
        if(!open) {
            let tl = new TimelineLite()
            tl
            .to(menu, .6, {xPercent:150, ease: Power1.easeInOut})
            open = true
            menuCTA.innerHTML = "close"
        } else {
            let tl = new TimelineLite()
            tl
            .to(menu, .6, {xPercent:0, ease: Power1.easeInOut})
            open = false
            menuCTA.innerHTML = "menu"
        }
    })
    const items = [...document.querySelectorAll('.menu--item')]
    for(const item of items) {
        item.addEventListener('mouseover', () => {
            item.children[0].style.color = `#${item.dataset.color}`
            let leftAnchor = 60 + (Math.random() * 20)
            item.children[1].style.left = `${leftAnchor}%`
            item.style.transform = `translateX(10px)`
            
        })
        item.addEventListener('mouseleave', () => {
            item.children[0].style.color = `#ffffff`
            item.style.transform = `translateX(-10px)`
        })
    }
}


const enableSlider = () => {
    const slide_1 = document.querySelector('.container-1')
    const slide_2 = document.querySelector('.container-2')
    const slide_3 = document.querySelector('.container-3')

    TweenLite.set([slide_3,slide_2], {top: '100%'})

    const slide_1__controller = document.querySelector('.intro-slide__controller-container__slide_1')
    const slide_2__controller = document.querySelector('.intro-slide__controller-container__slide_2')
    const slide_3__controller = document.querySelector('.intro-slide__controller-container__slide_3')

    slide_1__controller.style.transform = `scale(1.5,1.5)`
    let currentSlide = slide_1
    let toSlide

    slide_2__controller.addEventListener('click', () => {
        
        slide_1__controller.style.transform = `scale(1,1)`
        slide_2__controller.style.transform = `scale(1.5,1.5)`
        slide_3__controller.style.transform = `scale(1,1)`


        toSlide = slide_2
        if(currentSlide != toSlide) {
            let tl = new TimelineLite()
            tl
                .fromTo(currentSlide, 1, {top: '0%'},{top: '-100%', ease: Expo.easeInOut})
                .fromTo(toSlide,1, {top: '100%'},{top: '0%', ease: Expo.easeInOut},'-=1')
                .set(currentSlide, {top: '-100%'})
    
            currentSlide = toSlide
        }
    })

    slide_1__controller.addEventListener('click', () => {
        slide_1__controller.style.transform = `scale(1.5,1.5)`
        slide_2__controller.style.transform = `scale(1,1)`
        slide_3__controller.style.transform = `scale(1,1)`

        toSlide = slide_1
        if(currentSlide != toSlide) {
            let tl = new TimelineLite()
            tl
                .fromTo(currentSlide, 1, {top: '0%'},{top: '-100%', ease: Expo.easeInOut})
                .fromTo(toSlide,1, {top: '100%'},{top: '0%', ease: Expo.easeInOut},'-=1')
                .set(currentSlide, {top: '-100%'})
    
            currentSlide = toSlide
        }
        

    })

    slide_3__controller.addEventListener('click', () => {
        slide_1__controller.style.transform = `scale(1,1)`
        slide_2__controller.style.transform = `scale(1,1)`
        slide_3__controller.style.transform = `scale(1.5,1.5)`
        toSlide = slide_3
        if(currentSlide != toSlide) {
            let tl = new TimelineLite()
            tl
                .fromTo(currentSlide, 1, {top: '0%'},{top: '-100%', ease: Expo.easeInOut})
                .fromTo(toSlide,1, {top: '100%'},{top: '0%', ease: Expo.easeInOut},'-=1')
                .set(currentSlide, {top: '-100%'})
    
            currentSlide = toSlide
        } 
    })
    

}


if(document.querySelector('.plus-intro-part')) {
    enableInterraction()

}

if(document.querySelector('.CTA_menu')) {
    enableMenu()
}


if(document.querySelector('.container-1')) {
    enableSlider()
}



/**
 * Supprime l'ancien container
 */
const removeNode = (oldContent) => {
    oldContent.parentNode.removeChild(oldContent)
}

/**
 * Animation de transition entre les deux containers
 */
const  animate =(oldContent, newContent) => {

    const tl = new TimelineMax({onComplete: removeNode, onCompleteParams: [oldContent]})
        tl
        .to(oldContent, .5 , {opacity: 0, ease: Power0.easeInOut})
        .to(newContent, .5 , {opacity: 1, ease: Power0.easeIn}, "+= .1")

}

const content = document.querySelector('#content');

const loadPage = (url) => {
    return fetch(url, {
      method: 'GET'
    })
    .then((response) => {
      return response.text()
    })
}

const changePage = () => {
  const url = window.location.href;

  loadPage(url).then(function(responseText) {

    const wrapper = document.createElement('div')
        wrapper.innerHTML = responseText

        const oldContent = document.querySelector('.ajax__container')
    const newContent = wrapper.querySelector('.ajax__container')

    newContent.style.opacity = 0

    content.appendChild(newContent)

    animate(oldContent, newContent)
  });
}


if(document.querySelector('#ajax')) {
    //DOM element
    const ajaxBtn = document.querySelector('.calltoAction_click-container')

    //Click event Listener : On empeche l'évènement par défaut
    ajaxBtn.addEventListener('click', function(e) {

        e.preventDefault()

        //On actualise l'url avec la nouvelle URL
        history.pushState(null, null, ajaxBtn.children[0].href)
        changePage()

    })

    //executé quand l'url est modifié
    window.addEventListener('popstate', changePage);

    
}