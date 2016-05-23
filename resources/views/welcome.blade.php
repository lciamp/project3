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
                Hello!</br> I'm Louis M Ciampanelli Jr, a recent Computer Science graduate looking to start my career in software engineering. My main interests are web and mobile application development, especially location based apps. My favorite languages are php, python, JavaScript and Swift but I have a soft spot for C++. To learn more about me, click on the icons below or scroll down. </br>Thanks for your visit!
            </ul>

        </div>
    </div>
    <div style="height: 40px"></div>
     <div id="container" hidden="true">
         <a href="#edu" title="Education" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 3.5em"></i>
                     <span class="icon">Education</span>
                 </li>
             </ul>
         </a>
         <a href="#courses" title="Courses" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-book" aria-hidden="true" style="font-size: 3.5em"></i></br>
                     <span class="icon">Courses</span>
                 </li>

             </ul>
         </a>
         <a href="#skills" title="Skills" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-code" aria-hidden="true" style="font-size: 3.5em"></i></br>
                     <span class="icon">Skills</span>
                 </li>

             </ul>
         </a>
         <a href="#contact" title="Contact" tabindex="-1">
             <ul>
                 <li class="c4">
                     <i class="fa fa-envelope" aria-hidden="true" style="font-size: 3.5em"></i><br>
                     <span class="icon">Contact</span>
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
             </div>
             <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>

         </div>
     </div>
    <div class="content" style="height: 80%">

        <ul class="info"><strong>Iona College</strong>, School of Arts and Science (ABET Accredited), New Rochelle, NY
            <li>B.S. <strong>Computer Science</strong>, Minor <strong>Mathematics</strong>, Expected June 2016</li>
            <li>GPA: <strong>3.5</strong>, Major: <strong >3.8</strong></li>
        </ul>

        <ul class="info"><strong>SUNY Westchester Community College,</strong> Valhalla, NY
            <li>A.S. <strong>Computer Science</strong>, Awarded: December 2013</li>
        </ul>

        <ul class="info"><strong>HONORS/AWARDS:</strong>
            <li>Iona College Academic Scholarship</li>
            <li>Dean’s List (7/9 semesters)</li>
            <li>Phi Theta Kappa Honors Society</li>
        </ul>
        <ul class="info"><strong>CERTIFICATIONS:</strong>
            <li><strong>MongoDB</strong> – M101P: MongoDB for Developers</li>
        </ul>

    </div>
 </section>

 <section class="panel courses" data-section-name="courses" >
     <div id="courses" class="banner">
         <div class="banner-container">
             <div class="banner-info">
                 <i class="fa fa-book" aria-hidden="true" style="font-size: 1.2em"></i>&nbspCourses
             </div>
             <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>

         </div>
     </div>
     <div class="content">

         <div style="float: left; background-color: #F0F4ED; width: 50%; height: 80%">
             <ul class="info"><strong>Computer Science:</strong>
                 <li>Computer Science I & II</li>
                 <li>Computer Architecture I & II </li>
                 <li>Data Structures & Algorithm Analysis</li>
                 <li>Web Applications Development</li>
                 <li>Software Security</li>
                 <li>Database Organization and Design</li>
                 <li>Advanced Organization and Implementation of Database Systems</li>
                 <li>Software Development: Design</li>
                 <li>Software Development: Implementation</li>
                 <li>Operating Systems</li>
                 <li>Programming Languages</li>
                 <li>Programming in UNIX Environment</li>
             </ul>
         </div>
         <div style="float: right; background-color: #F0F4ED; width: 50%; height:100%">
             <ul class="info"><strong>Mathematics:</strong>
                 <li>College Algebra and Trig</li>
                 <li>Calculus 1</li>
                 <li>Calculus 2</li>
                 <li>Calculus 3</li>
                 <li>Discrete Mathematics</li>
                 <li>Automata and Formal Languages</li>
                 <li>Abstract Algebra</li>
                 <li>Probability and Statistics</li>
             </ul>
             <ul class="info"><strong>Physics:</strong>
                 <li>General Physics I & II</li>
                 <li>Modern Physics I & II</li>
             </ul>

         </div>


     </div>
 </section>

 <section class="panel skills" data-section-name="skills" >
     <div id="skills" class="banner">
         <div class="banner-container">
             <div class="banner-info">
                 <i class="fa fa-code" aria-hidden="true" style="font-size: 1.2em"></i>&nbspSkills
             </div>
             <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>

         </div>
     </div>
     <div class="content">
         <div style="float: left; background-color: #F0F4ED; width: 50%; height: 80%">
             <ul class="info"><strong>Programming Languages:</strong>
                 <li>C++</li>
                 <li>php</li>
                 <li>python</li>
                 <li>Java</li>
                 <li>Objective-C</li>
                 <li>Swift</li>
                 <li>HTML5/CSS3 (SASS/SCSS)</li>
                 <li>JavaScript/jQuery</li>
             </ul>
         </div>
         <div style="float: right; background-color: #F0F4ED; width: 50%; height:100%">
             <ul class="info"><strong>Frameworks:</strong>
                 <li>Laravel/Lumen</li>
                 <li>Django</li>
                 <li>Flask</li>
             </ul>
             <ul class="info"><strong>Database:</strong>
                 <li>MySQL</li>
                 <li>PostgreSQL</li>
                 <li>MongoDB</li>
             </ul>
             <ul class="info"><strong>Version Control:</strong>
                 <li>Git</li>
             </ul>

         </div>
     </div>
 </section>

 <section class="panel contact" data-section-name="contact" >
     <div id="contact" class="banner">
         <div class="banner-container">
             <div class="banner-info">
                 <i class="fa fa-envelope" aria-hidden="true" style="font-size: 1.2em"></i>&nbspContact
             </div>
             <div class="banner-top"><a href="#home" class="top" title="top" tabindex="-1"> top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>

         </div>
     </div>
     <div style="height: 20%"></div>
     <div class="content" style="width: 80%; margin-left: auto; margin-right: auto">

         <ul class="link" id="email" onmouseover="myFunction()" >
             <a href="mailto:l.ciamp@me.com" title="email">
                 <i class="fa fa-paper-plane" aria-hidden="true" style="font-size: 5em"></i>
             </a>
         </ul>
         <ul class="link" id="linkedin" onmouseover="myFunction2()" >
             <a href="https://www.linkedin.com/in/louis-ciampanelli-jr-58102270" title="LinkedIn" target="_blank">
                 <i class="fa fa-linkedin" aria-hidden="true" style="font-size: 5em"></i>
             </a>
         </ul>
         <ul class="link"  id="twitter" onmouseover="myFunction3()" >
             <a href="https://twitter.com/thedirtsquirrel" title="twitter" target="_blank">
                 <i class="fa fa-twitter" aria-hidden="true" style="font-size: 5em"></i>
             </a>
         </ul>
         <ul class="link" id="github" onmouseover="myFunction4()">
             <a href="https://github.com/lciamp" title="github" target="_blank">
                 <i class="fa fa-github" aria-hidden="true" style="font-size: 5em"></i>
             </a>
         </ul>
         <ul class="link" id="stack" onmouseover="myFunction5()">
             <a href="http://stackoverflow.com/users/1408495/lciamp" title="stack overflow" target="_blank">
                 <i class="fa fa-stack-overflow" aria-hidden="true" style="font-size: 5em"></i>
             </a>
         </ul>

         <div id="txt" style="-webkit-user-select: auto;width: 100%; color: #28363D; background-color: #F0F4ED; text-align: center; height:20%;  padding-top: 2%; font-size: 1.8em">

         </div>

     </div>
 </section>

@stop

@section('script')
    <script src="/js/jquery.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/scrollify.js"></script>
    <script src="js/app.js"></script>

@stop
