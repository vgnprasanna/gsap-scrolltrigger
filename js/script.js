$(document).ready(function(){
});
gsap.registerPlugin(SplitText);
gsap.registerPlugin(ScrollTrigger);
/**
 * Hero
 */
var heroHeadingSplit = SplitText.create('.hero-heading', {
    type: 'words, lines'
});

var heroParagraphSplit = SplitText.create('.hero-paragraph', {
    type: 'lines'
});

var heroTimeline = gsap.timeline();

heroTimeline
.from(heroHeadingSplit. words, {
    duration: 2,
    x: 100,
    autoAlpha: true,
    stagger: 0.05
})
.from(heroParagraphSplit. lines, {
    duration: 1,
    y: 40,
    autoAlpha: true,
    stagger: 0.05,
    delay: -2
})
.from('.hero-link', {
    opacity: 0,
    delay: 0
})

/**
 * Welcome
 */
var welcomeTextUp = $('.scroll-text-up');
var welcomeTextDown = $('.scroll-text-down');
var welcomeTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: '.welcome-section',
        start: 'top 90%',
        end: 'bottom top',
        scrub: 1
    }
});

welcomeTimeline
.to(welcomeTextUp, {
    x: '-100%'
})
.to(welcomeTextDown, {
    x: '100%'
});

/**
 * Video
 */
var videoItems = gsap.utils.toArray('.video-section .single-item');

var videoTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: '.video-section',
        start: 'top top',
        end: '+=1500',
        scrub: 1,
        pin: true
    }
});

videoItems.forEach((item) => {
    videoTimeline.from(item, {
        duration: 1,
        y: 100,
        autoAlpha: 0,
        stagger: 0.05
    });
});

const videoElement = document.getElementById("scrollVideo");

function setupVideoScrollTrigger() {
    const duration = videoElement.duration;

    gsap.to(videoElement, {
        scrollTrigger: {
            trigger: ".video-section",
            start: "top top",
            end: "+=1500",
            scrub: true,
            onUpdate: self => {
                const progress = self.progress;
                videoElement.currentTime = progress * duration;
            }
        }
    });
}

// If metadata is already loaded
if (videoElement.readyState >= 1) {
    console.log('metadata already loaded');
    setupVideoScrollTrigger();
} else {
    videoElement.addEventListener('loadedmetadata', () => {
        console.log('loaded via event');
        setupVideoScrollTrigger();
    });
}

/**
 * About
 */
var aboutMaskedWrapper = $('.masked-wrapper');
var aboutTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: '.about-section',
        start: 'top top',
        end: 'bottom top',
        scrub: 1,
        pin: true
    }
});

aboutTimeline.fromTo(aboutMaskedWrapper, 
    {
        duration: 1,
        maskPosition: 'center',
        maskSize: '50%'
    },
    {
        duration: 1,
        maskPosition: 'center',
        maskSize: '1000%'
    }
);

/**
 * Services
 */
var serviceHeadingSplit = SplitText.create('.service-heading', {
    type: 'chars, lines'
});
var serviceCards = $('.services-section .single-service');
var serviceTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: '.services-section',
        start: 'top 50%',
        end: '20% 50%'
    }
});

serviceTimeline
.from(serviceHeadingSplit. chars, {
    duration: 1,
    x: 100,
    autoAlpha: true,
    stagger: 0.05
})
.from(serviceCards, {
    duration: 1,
    x: 100,
    autoAlpha: true,
    stagger: 0.5,
    delay: -1
});

/**
 * Icons
 */
var iconItems = gsap.utils.toArray('.icon-section .single-icon');

var iconTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: '.icon-section',
        start: 'top top',
        end: 'bottom top',
        scrub: 1,
        pin: true
    }
});

iconItems.forEach((item) => {
    iconTimeline.from(item, {
        duration: 1,
        y: 100,
        scale: 0.2,
        autoAlpha: 0,
        stagger: 0.05
    });
});
