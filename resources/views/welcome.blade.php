@extends('layout', ['title' => 'Louis M Ciampanelli Jr'])

@section('additional-scripts')

@stop

@section('content')

 <section id="home" class="panel home" data-section-name="home" >
     </br></br>
     <header>
        <div id="type">
            <span class="element"></span>
        </div>
     </header>
    <div id="about" hidden='true'>
        <div id="about-container">

            <ul id="main-img">
                <img class="img-circle" src="img/space.jpg">
            </ul>
            <ul id="main-info">
                Hello!</br> I'm Louis Ciampanelli Jr, a recent Computer Science graduate looking to start my career in software engineering. My main interests are web and mobile application development, especially location based apps. My favorite languages are php, python, JavaScript and Swift but I have a soft spot for C++. To learn more about me, click on the icons below or scroll down. </br>Thanks for your visit!
            </ul>

        </div>
    </div>
    <div style="height: 40px"></div>
     <div id="container" hidden="true">
         <a href="#edu" title="Education" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 3.5em"></i>
                     <span style="font-size: 1.5em">Education</span>
                 </li>
             </ul>
         </a>
         <a href="#courses" title="Courses" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-book" aria-hidden="true" style="font-size: 3.5em"></i></br>
                     <span style="font-size: 1.5em">Courses</span>
                 </li>

             </ul>
         </a>
         <a href="#skills" title="Skills" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-code" aria-hidden="true" style="font-size: 3.5em"></i></br>
                     <span style="font-size: 1.5em">Skills</span>
                 </li>

             </ul>
         </a>
         <a href="#contact" title="Contact" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-envelope" aria-hidden="true" style="font-size: 3.5em"></i><br>
                     <span style="font-size: 1.5em">Contact</span>
                 </li>

             </ul>
         </a>
     </div>

</section>

 <section class="panel education" data-section-name="education" style=" -webkit-user-select: none;">
     <div id="edu" class="banner">
         <div class="banner-container">
             <div class="banner-info">
                <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 1.2em"></i>&nbspEducation
                 <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
             </div>
         </div>
     </div>
    <div class="content">

        <ul class="edu"><strong>Iona College</strong>, School of Arts and Science (ABET Accredited), New Rochelle, NY
            <li>B.S. <strong>Computer Science</strong>, Minor <strong>Mathematics</strong>, Expected June 2016</li>
            <li>GPA: <strong>3.5</strong>, Major: <strong >3.8</strong></li>
        </ul>

        <ul class="edu"><strong>SUNY Westchester Community College,</strong> Valhalla, NY
            <li>A.S. <strong>Computer Science</strong>, Awarded: December 2013</li>
        </ul>

        <ul class="edu"><strong>HONORS/AWARDS:</strong>
            <li>Iona College Academic Scholarship</li>
            <li>Dean’s List</li>
            <li>Phi Theta Kappa Honors Society</li>
            <li>SUNY WCC STEM Student Representative</li>
            <li>SUNY WCC Greta Cohan Personal Development Award Nominee</li>
        </ul>

    </div>
 </section>

 <section class="panel courses" data-section-name="courses" >
     <div id="courses" class="banner">
         <div class="banner-container">
             <div class="banner-info">
                 <i class="fa fa-book" aria-hidden="true" style="font-size: 1.2em"></i>&nbspCourses
                 <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
             </div>
         </div>
     </div>
     <div class="content">


     </div>
 </section>

 <section class="panel skills" data-section-name="skills" >
     <div id="skills" class="banner">
         <div class="banner-container">
             <div class="banner-info">
                 <i class="fa fa-code" aria-hidden="true" style="font-size: 1.2em"></i>&nbspSkills
                 <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
             </div>
         </div>
     </div>
     <div class="content">


     </div>
 </section>

 <section class="panel contact" data-section-name="contact" >
     <div id="contact" class="banner">
         <div class="banner-container">
             <div class="banner-info">
                 <i class="fa fa-envelope" aria-hidden="true" style="font-size: 1.2em"></i>&nbspContact
                 <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
             </div>
         </div>
     </div>
     <div class="content">


     </div>
 </section>

@stop

@section('script')
    <script src="/js/jquery.js"></script>
         <script src="js/typed.js"></script>
         <script src="js/scrollify.js"></script>

         <script src="js/app.js"></script>

@stop
