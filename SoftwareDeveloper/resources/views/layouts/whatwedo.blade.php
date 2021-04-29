@extends('navbar')
@section('context')
    <div class="col-md-12">
        <div class="simply_container">
            <div class="tittle">
                <h1>Software</h1>
            </div>
            <div class="sections">
                <div class="section_b">
                    <img id="img" class="software" src="/images/software.png" >
                </div>
                <div class="section_a">
                    <!--Se escribe el texto-->
                    <p> 
                        We develop software with known standards, such as <strong>Testing</strong>, 
                        <strong>Security</strong>, <strong> Stress test</strong> taking into account the 
                        initial proposals of our clients and improvements that are made throughout the development.
                    </p>
                    <p>
                        We work with the <strong>Scrum</strong> methodology, so that our client gets to know the prototype phases, 
                        always looking for feedback for software improvement.
                    </p>
                </div>
            </div>
        </div>
                 
        <div class="simply_container">
            <div class="tittle">
                <h3>Web</h3>
            </div>
            <div class="sections">
                <div class="section_b">
                    <img class="img" src="/images/testing_software.png" alt="" srcset="">
                    <h3 class="sub_tittle">Testing</h3>
                </div>
                <div class="section_c">
                    <img class="img" src="/images/security.png" alt="" srcset="">
                    <h3 class="sub_tittle">Security</h3>
                </div>
                <div class="section_a">
                    <img class="img" src="/images/stress.jpg" alt="" srcset="">
                    <h3 class="sub_tittle">Stress test</h3>
                </div>
            </div>
        </div>

        <div class="simply_container">
            <div class="tittle">
                <h3>App</h3>
            </div>
            <div class="sections">
                <div class="section_b">
                    <img id="img" class="software" src="/images/android.jpg" >
                </div>
                <div class="section_a">
                    <!--Se escribe el texto-->
                    <p> 
                        When we talk about a mobile application being native, we mean that it is developed
                        in the programming language of the original platform. For example, 
                        each operating system has its respective language to program applications, 
                        this has some advantages and disadvantages, but before looking at them, let's 
                        see what language is native to each of the most popular mobile platforms of the moment.
                    </p>
                    <p>
                        <strong><li>Maximum performance in devices</li></strong> 
                        <strong><li>User experience is increased</li></strong> 
                        <strong><li>Constant Updates</li></strong>
                    </p>
                </div>
            </div>
        </div>

        <div class="simply_container">
            <div class="tittle">
                <h3>Api</h3>
            </div>
            <div class="sections">
                <div class="section_b">
                    <img class="img" src="/images/android.jpg" alt="" srcset="">
                    <h3 class="sub_tittle">Scalable</h3>
                </div>
                <div class="section_a">
                    <img class="img" src="/images/ios.jpg" alt="" srcset="">
                    <h3 class="sub_tittle">Modular</h3>
                </div>
            </div>
        </div>

        <div class="simply_container">
            <div class="tittle">
                <h1>Drones</h1>
            </div>
            <div class="sections">
                <div class="section_x" id="app">
                    <slide-image></slide-image>
                    <!--img class="img_drones" src="/images/drone2.jpg" alt="" srcset=""-->
                </div>
            </div>
        </div>

    </div>
@stop
