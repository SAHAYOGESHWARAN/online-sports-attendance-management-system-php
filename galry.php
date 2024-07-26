<!DOCTYPE html>
<html lang="en" >
  <style>
    

html, body, #app {
  width:100%;
  height:100%;
  margin:0;
  padding:0;
  font-size:0;
  font-family: 'Montserrat', sans-serif;
}

#app {
  opacity:0;
  height:auto;
  background:radial-gradient(#ccc, #999);
}

#app img {
  display:block;
}

#detail {
  position:absolute;
  width:100%;
  height:100%;
  background:#111;
  top:100%;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:space-evenly;
}

#detailImg {
  width:85%;
  height:85%;
}

#detailTxt {
  color:#ccc;
  font-size:20px;
  letter-spacing:1px;
}

svg {
  pointer-events:none;
  position:absolute;
  top:0;
  left:0;
}

#headlines {
  max-width:800px;
  min-width:450px;
  left:50%;
  top:50%;
  transform:translate(-50%, -50%);
}
  </style>
<head>
  <meta charset="UTF-8">
  <title>sports  Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="scrollDist"></div>

<div id="app">
  
  <svg id="headlines" fill="none" stroke="#fff" stroke-width="3" viewBox="0 0 586 150">
    
    <g id="txt1">
      <path d="M40.2,16.9c-5,0-9.1,1-12.3,3.1S23,25.1,23,29.3c0,4.1,1.6,7.3,4.8,9.5s10,4.6,20.5,7.1 c10.5,2.5,18.3,6.1,23.7,10.7c5.3,4.6,8,11.3,8,20.2c0,8.9-3.4,16.1-10.1,21.7c-6.7,5.5-15.5,8.3-26.4,8.3 c-16,0-30.1-5.5-42.5-16.5l10.8-13c10.3,9,21,13.4,32.1,13.4c5.5,0,10-1.2,13.2-3.6c3.3-2.4,4.9-5.5,4.9-9.5s-1.5-7-4.6-9.2 s-8.3-4.2-15.8-6c-7.5-1.8-13.2-3.5-17.1-5c-3.9-1.5-7.4-3.5-10.4-5.9c-6-4.6-9.1-11.6-9.1-21c0-9.4,3.4-16.7,10.3-21.8 C22.2,3.6,30.7,1,40.9,1c6.5,0,13,1.1,19.4,3.2c6.4,2.1,12,5.2,16.6,9.1l-9.2,13c-3-2.7-7.1-5-12.3-6.7 C50.3,17.8,45.2,16.9,40.2,16.9z"/>
      <path d="M147.9,89.9c5.9,0,11-1,15.3-3c4.3-2,8.8-5.2,13.4-9.6l11.1,11.4c-10.8,12-23.9,18-39.3,18 c-15.4,0-28.2-5-38.4-14.9c-10.2-9.9-15.3-22.5-15.3-37.7s5.2-27.8,15.5-38C120.6,6.1,133.7,1,149.6,1c15.8,0,29,5.8,39.6,17.5 l-11,12c-4.9-4.7-9.5-7.9-13.8-9.8c-4.3-1.8-9.4-2.8-15.3-2.8c-10.3,0-19,3.3-26,10c-7,6.7-10.5,15.2-10.5,25.6 c0,10.4,3.5,19,10.4,26C130.1,86.4,138.3,89.9,147.9,89.9z"/>
      <path d="M290.2,36.6c0,16.8-7.3,27.4-22,31.8l26.7,37.1H273l-24.4-34.3H226v34.3h-17.2V3.5h38 c15.6,0,26.7,2.6,33.4,7.9C286.9,16.6,290.2,25,290.2,36.6z M267.3,51.1c3.5-3,5.3-7.9,5.3-14.5c0-6.7-1.8-11.2-5.4-13.7 c-3.6-2.5-10-3.7-19.3-3.7H226v36.5h21.5C257.2,55.6,263.8,54.1,267.3,51.1z"/>
      <path d="M400.5,91.4c-10.3,10.1-23.1,15.1-38.3,15.1c-15.2,0-27.9-5-38.3-15.1c-10.3-10.1-15.5-22.6-15.5-37.7 s5.2-27.6,15.5-37.7C334.3,6,347,1,362.2,1c15.2,0,27.9,5,38.3,15.1c10.3,10.1,15.5,22.6,15.5,37.7S410.8,81.4,400.5,91.4z  M387.8,27.6c-7-7.2-15.5-10.8-25.6-10.8c-10.1,0-18.7,3.6-25.6,10.8c-7,7.2-10.4,15.9-10.4,26.2c0,10.3,3.5,19,10.4,26.2 c7,7.2,15.5,10.8,25.6,10.8c10.1,0,18.7-3.6,25.6-10.8c7-7.2,10.4-15.9,10.4-26.2C398.3,43.5,394.8,34.8,387.8,27.6z"/>
      <path d="M437.7,105.5V3.5h17.2v85.7h46.6v16.4H437.7z"/>
      <path d="M520.3,105.5V3.5h17.2v85.7h46.6v16.4H520.3z"/>
    </g>
    
    <g id="txt2">
      <path d="M210.7,1v16.2h-54.5v27h48.9v15.3h-48.9v27.3h56.2v16.2H139V1H210.7z"/>
	    <path d="M311,1h17.2v102.1h-18.7l-57.8-74.5v74.5h-17.2V1h17.2L311,77.2V1z"/>
	    <path d="M433.8,14.4c9.8,8.9,14.7,21.3,14.7,37.2c0,15.9-4.8,28.4-14.3,37.7c-9.5,9.2-24.1,13.9-43.8,13.9h-33.9V1h35 C409.9,1,423.9,5.5,433.8,14.4z M431.1,52c0-23.4-13.4-35-40.1-35h-17.2v69.9h19.1c12.4,0,21.8-2.9,28.4-8.8 C427.9,72.1,431.1,63.4,431.1,52z"/>
    </g>
    
  </svg>
  
  <div id="imgGroup">
    <img src="11.jpg" data-x="300" data-y="0" alt="Sports day">
    <img src="11.jpg" data-x="200" data-y="250" alt="Sports day">
    <img src="11.jpg" data-x="-100" data-y="-150" alt="Sports day">
    <img src="11.jpg" data-x="-500" data-y="50" alt="Sports day">
    <img src="11.jpg" data-x="-60" data-y="-10" alt="Sports day">
    <img src="11.jpg" data-x="-200" data-y="-200" alt="Sports day">
    <img src="11.jpg" data-x="100" data-y="-150" alt="Sports day">
    <img src="11.jpg" data-x="-300" data-y="50" alt="Sports day">
    <img src="11.jpg" data-x="-50" data-y="-200" alt="Sports day">
    <img src="11.jpg" data-x="-120" data-y="60" alt="Sports day">
    <img src="11.jpg" data-x="400" data-y="-100" alt="Sports day">
    <img src="11.jpg" data-x="-60" data-y="150" alt="Sports day">
    <img src="11.jpg" data-x="-200" data-y="200" alt="Sports day">
    <img src="11.jpg" data-x="300" data-y="-120" alt="Sports day">
  </div>
  
  <div id="detail">
    <div id="detailImg"></div>
    <div id="detailTxt"></div>
  </div>
  
  <svg width="100%" height="100%" fill="none" stroke="#fff">
    <g id="cursor">
      <circle id="cursorCircle" cx="0" cy="0" r="12" stroke-width="3"/>
      <path id="cursorClose" d="M-25,-25 L25,25 M-25,25 L25,-25" opacity="0" stroke-width="3.5"/>
    </g>
  </svg>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js'></script>
<script src='https://assets.codepen.io/16327/DrawSVGPlugin3.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js'></script><script  src="./script.js"></script>

</body>
</html>
<script>
  window.onload=()=>{
  
  gsap.set('#scrollDist', {
    width: '100%',
    height: gsap.getProperty('#app', 'height'), // apply the height of the image stack
    onComplete:()=>{
      gsap.set('#app, #imgGroup', {opacity:1, position:'fixed', width:'100%', height:'100%', top:0, left:0, perspective:300}) 
      gsap.set('#app img', {
        position: 'absolute',
        attr:{ id:(i,t,a)=>{ //use GSAP's built-in loop to setup each image
          initImg(i,t);
          return 'img'+i;
        }}
      })

      gsap.timeline({
        defaults:{ duration:1 },
        onUpdate:()=>{ if (gsap.getProperty('#cursorClose','opacity')==1) closeDetail() }, //close detail view on scroll
        scrollTrigger:{
        trigger: '#scrollDist',
        start: 'top top',
        end: 'bottom bottom',
        scrub: 1
      }})
      .fromTo('#txt1', {scale:0.6, transformOrigin:'50%'}, {scale:2, ease:'power1.in'}, 0)
      .to('#txt1 path', {duration:0.3, drawSVG:0, stagger:0.05, ease:'power1.in'}, 0)
      .fromTo('.imgBox', {z:-5000}, {z:350, stagger:-0.3, ease:'none'}, 0.3)
      .fromTo('.imgBox img', {scale:3}, {scale:1.15, stagger:-0.3, ease:'none'}, 0.3)      
      .to('.imgBox', {duration:0, pointerEvents:'auto', stagger:-0.3}, 0.5)
      .from('.imgBox img', {duration:0.3, opacity:0, stagger:-0.3, ease:'power1.inOut'}, 0.3)
      .to('.imgBox img', {duration:0.1, opacity:0, stagger:-0.3, ease:'expo.inOut'}, 1.2)      
      .to('.imgBox', {duration:0, pointerEvents:'none', stagger:-0.3}, 1.27)
      .add('end')
      .fromTo('#txt2', {scale:0.1, transformOrigin:'50%'},{scale:0.6, ease:'power3'}, 'end-=0.2')
      .from('#txt2 path', {duration:0.4, drawSVG:0, ease:'sine.inOut', stagger:0.15}, 'end-=0.2')      
            
      // intro animation
      gsap.from(window, {duration:1.4, scrollTo:gsap.getProperty('#scrollDist','height')/3, ease:'power2.in'});
      gsap.from('.imgBox', {duration:0.2, opacity:0, stagger:0.06, ease:'power1.inOut'})
    }  

  })  
  
  function initImg(i,t){
    const box = document.createElement('div') // make a container div
    box.appendChild(t) // move the target image into the container
    document.getElementById('imgGroup').appendChild(box) // put the container into the imgGroup div
    gsap.set(box, {
        pointerEvents:'none',
        position:'absolute',
        attr:{ id:'box'+i, class:'imgBox' },
        width:t.width,
        height:t.height,
        overflow:'hidden',
        top:'50%',
        left:'50%',
        x:t.dataset.x,
        y:t.dataset.y,
        xPercent:-50,
        yPercent:-50,
        perspective:500
      })

    t.onmouseover =()=> gsap.to('#cursorCircle', {duration:0.2, attr:{r:30, 'stroke-width':4}})
    
    t.onmousedown =()=> {
      gsap.to(t, {z:-25, ease:'power2'})
      gsap.to('#cursorCircle', {attr:{r:40}, ease:'power3'})
    }
    
    t.onmouseup =()=> gsap.to(t, {z:0, ease:'power1.inOut'})
    
    t.onmouseout =()=> gsap.to('#cursorCircle', {duration:0.2, attr:{r:11, 'stroke-width':3}})
    
    t.onclick =()=> showDetail(t)
  }  
  
  function showDetail(t){
    gsap.timeline()
        .set('#detailTxt', {textContent:t.alt}, 0)
        .set('#detailImg', {background:'url('+t.src+') center no-repeat'}, 0)
        .fromTo('#detail', {top:'100%'}, {top:0, ease:'expo.inOut'}, 0)
        .fromTo('#detailImg', {y:'100%'}, {y:'0%', ease:'expo', duration:0.7}, 0.2)
        .fromTo('#detailTxt', {opacity:0}, {opacity:1, ease:'power2.inOut'}, 0.4)
        .to('#cursorCircle', {duration:0.2, opacity:0}, 0.2)
        .to('#cursorClose', {duration:0.2, opacity:1}, 0.4)
  }
  
  function closeDetail(){
    gsap.timeline()
        .to('#detailTxt', {duration:0.3, opacity:0}, 0)    
        .to('#detailImg', {duration:0.3, y:'-100%', ease:'power1.in'}, 0)
        .to('#detail', {duration:0.3, top:'-100%', ease:'expo.in'}, 0.1)
        .to('#cursorClose', {duration:0.1, opacity:0}, 0)
        .to('#cursorCircle', {duration:0.2, opacity:1}, 0.1)
  }
  document.getElementById('detail').onclick = closeDetail;
  
  if (ScrollTrigger.isTouch==1) { // on mobile, hide mouse follower + remove the x/y positioning from the images
    gsap.set('#cursor', {opacity:0}) 
    gsap.set('.imgBox', {x:0, y:0})
  } else {
    
    // quickTo can be used to optimize x/y movement on the cursor...but it doesn't work on fancier props like 'xPercent'
    cursorX = gsap.quickTo('#cursor', 'x', {duration:0.3, ease:'power2'})
    cursorY = gsap.quickTo('#cursor', 'y', {duration:0.3, ease:'power2'})
    
    window.onmousemove =(e)=> {      
      gsap.to('.imgBox', { // move + rotate imgBoxes relative to mouse position
        xPercent:-e.clientX/innerWidth*100,
        yPercent:-25-e.clientY/innerHeight*50,
        rotateX:8-e.clientY/innerHeight*16,
        rotateY:-8+e.clientX/innerWidth*16
      })
      
      gsap.to('.imgBox img', { // move images inside each imgBox, creates additional parallax effect
        xPercent:-e.clientX/innerWidth*10,
        yPercent:-5-e.clientY/innerHeight*10
      })
      
      // mouse follower
      cursorX(e.clientX)
      cursorY(e.clientY)
    }
  }
}
</script>