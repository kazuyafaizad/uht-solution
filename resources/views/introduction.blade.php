<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Introduction') }}
        </h2>
    </x-slot>


    <style>
        .swiper {
            width: 70%;
            height: 35rem;
        }

        .footer {
            display: none;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: black;
        }
    </style>
    <div class="flex h-[calc(100vh-7.5rem)]" data-aos="fade-up">
        <div class="w-1/5 sticky top-0 h-full bg-base-200">
            <ul class="menu bg-base-100 w-full">
                <li><a class="active" href="#general-feature-and-advantages">General Feature and Advantages</a></li>
                <li><a href="#classification">Classification</a></li>
                <li><a href="#specification">Specification</a></li>
                <li><a href="#configuration">Configuration</a></li>
                <li><a href="#service-button">List of Service Button</a></li>
                <li><a href="#diagnosis-mode">Diagnosis Mode</a></li>
                {{-- <li><a href="#overview">Overview of Ultrasound SonoAce R7</a></li> --}}
            </ul>
        </div>
        <div id="main-section"
            class="w-2/4 flex-1 overflow-y-auto p-4 scrollbar-thin scrollbar-thumb-primary scrollbar-track-white ">
            <section id="general-feature-and-advantages" class="px-10 pb-10">
                <h1 class="uppercase text-3xl mb-5 text-primary">General Feature and Advantages</h1>
                <ul class="list-disc leading-7 text-justify">
                    <li>
                        High-end Digital Beam forming : The SonoAceR7 utilizes the newly developed Digital Beam forming
                        technology.​
                    </li>
                    <li>
                        A variety of applications : The SonoAceR7 is optimized for use in a variety of ultrasound
                        departments,
                        cardiac, vascular, abdomen, Obstetrics, Urology, Gynecology.
                    </li>
                    <li> Various diagnostic Modes : 2D Mode, M Mode, Color Doppler Mode,
                        Power Doppler Mode, PW Spectral Doppler
                        Mode, etc.</li>
                    <li> Measurement and Report Functions : Besides the basic distance,
                        area,
                        circumference and volume
                        measurement functions, the SonoAceR7 also provides application-specific measurement functions.
                        The
                        report function collates measurement data.​</li>
                    <li> Review of Scanned Images : The SonoAceR7 displays Cine images of
                        7084 frames and loop images of 8192
                        lines.​</li>
                    <li>SonoView TM : This is a total ultrasound image management system,
                        which allows a user to archive, view
                        and exchange documents.​</li>
                    <li>Digital Imaging and Communication in Medicine (DICOM) Function :
                        This is used to archive, transmit and
                        print DICOM images through a network.​</li>
                    <li> Peripheral/Accessory Connection : A variety of peripheral devices
                        including VCRs and printers can be
                        easily connected to the SonoAceR7.</li>
                </ul>
                <p class="mt-10 mb-4 font-bold text-center">Navigate through the 3D below</p>
                <div class="sketchfab-embed-wrapper my-4 h-96 max-w-lg mx-auto"> <iframe class="w-full h-4/5"
                        title="Printer Ultrasound" frameborder="0" allowfullscreen mozallowfullscreen="true"
                        webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/0c8fe556423142b3a1e866782aa747b2/embed"> </iframe>
                    <p> <a href="https://sketchfab.com/3d-models/printer-ultrasound-0c8fe556423142b3a1e866782aa747b2?utm_medium=embed&utm_campaign=share-popup&utm_content=0c8fe556423142b3a1e866782aa747b2"
                            target="_blank" rel="nofollow" class="text-primary text-center"> Printer
                            Ultrasound </p>
                </div>
                <div class="sketchfab-embed-wrapper my-4  h-96 max-w-lg mx-auto"> <iframe class="w-full h-4/5"
                        title="Props" frameborder="0" allowfullscreen mozallowfullscreen="true"
                        webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/f15de6c46aba470c8b7b04001e6982b4/embed"> </iframe>
                    <p> <a href="https://sketchfab.com/3d-models/props-f15de6c46aba470c8b7b04001e6982b4?utm_medium=embed&utm_campaign=share-popup&utm_content=f15de6c46aba470c8b7b04001e6982b4"
                            target="_blank" rel="nofollow" class="text-primary text-center"> Probes </a></p>
                </div>
                <div class="sketchfab-embed-wrapper my-4  h-96 max-w-lg mx-auto"> <iframe class="w-full h-4/5"
                        title="Body Ultrasound" frameborder="0" allowfullscreen mozallowfullscreen="true"
                        webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/345045064273456a9d5f989b8f8eca40/embed"> </iframe>
                    <p> <a href="https://sketchfab.com/3d-models/body-ultrasound-345045064273456a9d5f989b8f8eca40?utm_medium=embed&utm_campaign=share-popup&utm_content=345045064273456a9d5f989b8f8eca40"
                            target="_blank" rel="nofollow" class="text-primary text-center"> Body Ultrasound
                        </a> </p>
                </div>
                <div class="sketchfab-embed-wrapper my-4  h-96 max-w-lg mx-auto"> <iframe class="w-full h-4/5"
                        title="Monitor Ultra Sound" frameborder="0" allowfullscreen mozallowfullscreen="true"
                        webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/8f6e799c929549208323e26a95de71a2/embed"> </iframe>
                    <p> <a href="https://sketchfab.com/3d-models/monitor-ultra-sound-8f6e799c929549208323e26a95de71a2?utm_medium=embed&utm_campaign=share-popup&utm_content=8f6e799c929549208323e26a95de71a2"
                            target="_blank" rel="nofollow" class="text-primary text-center"> Monitor Ultra
                            Sound </a> </p>
                </div>
            </section>
            <section class="px-10 py-10 bg-base-200 " id="classification">
                <h1 class="uppercase text-3xl  mb-5 text-primary">CLASSIFICATION</h1>
                <ul class="list-disc leading-7">
                    <li>
                        Type of protection against electrical shock: Class I​
                    </li>
                    <li>
                        Degree of protection against electrical shock (Patient connection):Type BF equipment​
                    </li>
                    <li>Degree of protection against harmful ingress of water: Ordinary equipment​</li>
                    <li> Degree of safety of application in the presence of a flammable anesthetic
                        material with air or with oxygen or nitrous oxide: Equipment not suitable for use in the
                        presence of a flammable anesthetic mixture with air or with oxygen or nitrous oxide.​​</li>
                    <li> Mode of operation: Continuous operation​</li>

                </ul>
            </section>
            <section class="px-10 py-10" id="specification">
                <h1 class="uppercase text-3xl mb-5 text-primary">Specification</h1>
                <ul>
                    <li>
                        <a href="/img/1)slide specification 1.png" data-fslightbox="specification">
                            <img class="w-full max-w-xl mx-auto" src="/img/1)slide specification 1.png">
                        </a>
                    </li>
                    <li>
                        <a href="/img/2)slide specification 2.png" data-fslightbox="specification">
                            <img class="w-full max-w-xl mx-auto" src="/img/2) slide specification 2.png">
                        </a>
                    </li>
                    <li><a href="/img/3)slide specification 3.png" data-fslightbox="specification">
                            <img class="w-full max-w-xl mx-auto" src="/img/3)slide specification 3.png"></a>​</li>
                    <li><a href="/img/4)slide specification 4.png" data-fslightbox="specification"><img
                                class="w-full max-w-xl mx-auto" src="/img/4)slide specification 4.png"></a>​​</li>
                    <li><a href="/img/5)slide specification 5.png" data-fslightbox="specification"><img
                                class="w-full max-w-xl mx-auto" src="/img/5)slide specification 5.png">​</a></li>

                </ul>
                <div class="mt-10">
                    <h4 class="text-2xl mb-5">The SONOACE R7 Diagnostic Ultrasound System and transducers are
                        intended
                        for diagnostic
                        ultrasound ​
                        imaging and fluid analysis of the human body.</h4>
                    <p class="mb-4 font-bold">Principles of Operation​</p>

                    <p class="text-justify"> Medical ultrasound images are created by computer and digital memory from
                        the
                        transmission ​

                        and reception of mechanical high-frequency waves applied through a probe. The mechanical
                        ​

                        ultrasound waves spread through the body, producing an echo where density changes occur.
                        ​

                        For example, in the case of tissue, an echo is created where a signal passes from an
                        adipose tissue ​

                        region to a muscular tissue region. The echoes return to the probe where they are
                        converted back ​

                        into electrical signals.​

                        These echo signalsare highly amplified and processed by analog and digital circuits
                        having filters ​

                        with many frequency and time response options, transforming the high-frequency
                        electrical signals ​

                        into a series of digital image signals which are stored in memory. Once in memory, the
                        image can ​

                        be displayed in real-time on the image monitor. All signal transmission, reception and
                        processing ​

                        characteristics are controlled by computer.​ </p>
            </section>
            <section class="px-10 py-10 bg-base-200" id="configuration">
                <h1 class="uppercase text-3xl mb-5 text-primary">configuration</h1>
                <div>
                    <p>
                        Ultrasound SonoAce R7 consists of the monitor, the control panel, the console and, the
                        probes.
                    </p>
                    <p class="font-bold mt-3">Console</p>
                    <ul class="list-disc leading-7">
                        <li>
                            The console consists of two parts – the inner unit and the outer unit.
                        </li>
                        <li>The interior of the console mainly contains devices that produce
                            ultrasound
                            images.​</li>
                        <li>The outside of the console consists of various connection ports, probe
                            holder,
                            storage space, wheel and handles.​​</li>
                    </ul>
                </div>
                <div class="mt-12">
                    <img src="/img/with-label.png" alt="" class="w-full max-w-xl mx-auto">
                </div>
                <p class="my-4 text-xl">2D Image of Ultrasound SonoAce R7 </p>
                <div class="grid md:grid-cols-4 bg-base-100 rounded">

                    <img src="/img/7)slide no 11  body ultrasound 1.png" alt="">
                    <p class="ml-4">① Monitor​ <br>
                        ② Monitor Hinge​<br>
                        ③ Speaker​<br>
                        ④ Keyboard & Control Panel​<br>
                        ⑤ Probe Holder​<br>
                        ⑥ Handle ​<br>
                        ⑦ Cable Hook ​<br>
                        ⑧ Lift ​<br>
                        ⑨ DVD Drive ​<br>
                        ⑩ Probe Port​<br>
                        ⑪ Wheel​</p>

                    <img src="img/8)slide no 11  body ultrasound 2.png" alt="">
                    <p class="ml-4">
                        ① Handle (Optional)​<br>​
                        ② Storage Space​​<br>
                        ③ Ventilation​​<br>
                        ④ Rear Panel​​<br>
                        ⑤ Cable Hook​​<br>
                        ⑥ Power Connection Part​</p>
                </div>
                <div class="mt-12">
                    <h3 class="text-xl mb-4">LCD MONITOR​</h3>
                    <p>The monitor of this system is a color VGA monitor, which displays ultrasound
                        images and
                        additional information. Monitor arm can control to be tilted to the optimal viewing angle.
                    </p>
                    <img class="w-full max-w-xs mx-auto my-5" src="img/9__slide_12_monitor-removebg-preview.png">
                    <h4 class="font-bold mb-4">Monitor Display</h4>
                    <p>The monitor displays ultrasound images, operation menus and a variety of other information.
                        As shown in the figure below, the screen contains: ① Title Area, ② Menu, ③ Image Area, ④
                        Thumbnail Area, ⑤ User Information Area, ⑥ Soft Menu.</p>

                    <div class="mt-4 grid md:grid-cols-2 gap-4 justify-content-center items-center">
                        <a href="img/10)slide 14 monitor.png" data-fslightbox="config"><img
                                src="img/10)slide 14 monitor.png" alt="" class="w-full max-w-xl mx-auto"></a>
                        <ol class="list-decimal leading-7 rounded bg-base-100 list-inside p-2">
                            <li><strong>Title Area</strong>​<br>

                                The title area displays the patient name, hospital name, application, frame rate and
                                depth, probe information, acoustic output information, and the date and time.​
                            </li>
                            <li><strong>Menu</strong>​<br>

                                This displays the utility menu or measurement menu.​</li>

                            <li><strong>Image Area​</strong><br>

                                The ultrasound image, image information, annotation, and measurement are displayed
                                in the image area.​</li>

                            <li><strong>Thumbnails Area​</strong><br>

                                When clicking on the Save button, the saved images are displayed. If you place the
                                pointer on an image and click, the image is magnified. Up to 7 images are
                                displayed.​
                            </li>
                            <li><strong>User Information Area​</strong><br>

                                User information area provides a variety of information necessary for system use
                                e.g. current system status, image information, available items, bodymarkers, and so
                                on.​

                                ​</li>
                        </ol>
                    </div>
                </div>
                <div class="mt-12">
                    <h3 class="text-xl mb-4">CONTROL PANEL​</h3>
                    <div class="flex flex-col">
                        <p class="mb-4">The control panel consists of a keyboard, buttons, dial-buttons, a switch, a
                            slide, and a trackball.​
                            The dial-button can be used both as a dial and a button.​
                        </p>
                        <!-- Slider main container -->
                        <div class="swiper my-5">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide "><img class="w-full max-w-xl mx-auto"
                                        src="/img/11)slide control panel 1.png">
                                </div>
                                <div class="swiper-slide "><img class="w-full max-w-xl mx-auto"
                                        src="/img/12)slide control panel 2.png">
                                </div>
                                <div class="swiper-slide "><img class="w-full max-w-xl mx-auto"
                                        src="/img/13)slide control panel 3.png"></div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>

                    </div>
                    <div class="mt-12">
                        <h3 class="text-xl mb-4">CONTROL PANEL MAP​</h3>
                        <img src="/img/14)slide 16 control panel map.png" class="w-full max-w-xl mx-auto"
                            alt="">
                        <img src="/img/15) slide 17 control panel map.png" class="w-full max-w-xl mx-auto"
                            alt="">
                    </div>
                    <div class="mt-12">
                        <h3 class="text-xl mb-4">CONTROL PANEL​ KEYBOARD</h3>
                        <div class="grid grid-cols-2 gap-2 items-center">
                            <img src="/img/16)slide 18 control panel keyboard 1.png" class="w-5/6 mx-auto">
                            <img src="/img/17)slide 18 control panel keyboard 2.png" class="w-full mx-auto">
                        </div>
                    </div>
                    <div class="mt-12">
                        <h3 class="text-xl mb-4">CONSOLE</h3>

                        <p>The console consists of two parts – the inner unit and the outer unit. The interior
                            of the console mainly contains devices that produce ultrasound images. On the
                            exterior of the console are various connectors, probe holders, storage compartments,
                            handles, wheels, etc​</p>
                        <p class="my-4"><strong>Rear Panel​</strong><br>

                            A monitor and other peripheral devices like printer, VCR, etc. are connected via the
                            rear panel at the back of the system.​</p>
                        <div class="flex gap-4 p-4 bg-base-100 rounded">
                            <img src="img/18)slide 19 rear panel picture.png" class=" mx-auto">
                            <p> ① MIC Port (Input): Connects the mic.​<br>
                                ② Remote Print Port (Output): Prints out remotely by connecting the Echo ​<br>
                                printer.​<br>
                                ③ B/W Printer Port (Output): Connects the Echo printer.​<br>
                                ④ Parallel Port (Output): Connects the printer and foot switch.​<br>
                                ⑤ DVI Port (Output): Outputs digital signals on the monitor.​<br>
                                ⑥ USB Port: Connects USB peripheral devices.​<br>
                                ⑦ Network Port: Connects to network. Patient information can be ​<br>
                                transferred to other servers through the DICOM network.​<br>
                                ⑧ S-VHS Port (Output): Connects S-VHS VCR.​<br>
                                ⑨ VHS Port (Output): Connects VHS VCR.​<br>
                                ⑩ Audio Port (Output): Used for outputting audio signals.​
                            </p>
                        </div>
                    </div>
                    <div class="mt-12">

                        <h3 class="text-xl mb-4">CONSOLE​ Power Connection Part​</h3>
                        <p class="mb-4">The power connection part is located at the back of the system body.​</p>
                        <div class="grid md:grid-cols-2 gap-4 rounded bg-base-100 p-2">
                            <div>
                                <p class="text-justify">① Power Switch: Supplies or cuts power to the entire
                                    system.​<br>

                                    ② Power Inlet: Connects the power cable to an external power source.​<br>

                                    ③ Fuse Holder: Holds the inlet fuse​<br>

                                    ④ Equipotential Terminal: This should be connected to the equipotential connection
                                    part in the exam ​<br>

                                    room.​<br>

                                    ⑤ Output rating change switch: Selects the output power.​</p>
                            </div>
                            <div class="">
                                <img src="/img/19)slide power connection part.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="px-10 py-10 " id="service-button">
                <h1 class="uppercase text-3xl  mb-5 text-primary">List of Service Button</h1>
                <div class="grid md:grid-cols-4 gap-2 mb-4">
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/20__slide_21_..handle_cap-removebg-preview.png"
                            alt="">
                        <p> HANDLE CP​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/21_slide_21_knoe_encoder_num-removebg-preview.png"
                            alt="">
                        <p> KNOB ENCODER CIR S(NUM)​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/22__slide_21_knob_encoder_qscan-removebg-preview.png"
                            alt="">
                        <p>KNOB ENCODER CIR S(Q SCAN)​​</p>
                    </div>

                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/23_slide_21_knob_encoder_menu-removebg-preview (1).png"
                            alt="">
                        <p>KNOB ENCODER MENU​​</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-5 gap-2 my-4">
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/24_slide_21_cap_keypower-removebg-preview.png" alt="">
                        <p>CAP KEY POWER​​</p>
                    </div>


                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/25_slide_21_cap_key_print-removebg-preview.png"
                            alt="">
                        <p>CAP KEY PRINT​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/26_slide_21_cap_key_dual-removebg-preview.png" alt="">
                        <p>CAP KEY DUAL​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/27_slide_21_cak_key_save-removebg-preview.png" alt="">
                        <p>CAP KEY SAVE​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/28_slide_21_cap_key_pw-removebg-preview.png" alt="">
                        <p>CAP KEY PW​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/29_slide_22_cap_key_M-removebg-preview.png" alt="">
                        <p>CAP KEY M​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/30_slide_22_cap_key_PD-removebg-preview.png" alt="">
                        <p>CAP KEY PD​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/31_slide_22_cap_key_C-removebg-preview.png" alt="">
                        <p>CAP KEY C​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/32_slide_22_cap_key_CW-removebg-preview.png" alt="">
                        <p>CAP KEY C​W​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/33_slide_22_cap_key_3D_4D-removebg-preview.png"
                            alt="">
                        <p>CAP KEY 3D4D​​</p>
                    </div>

                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/34__slide_22_cap_key_2D-removebg-preview.png" alt="">
                        <p>CAP KEY 2D​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/34_i__slide_22_end_exam-removebg-preview.png" alt="">
                        <p>CAP KEY END EXAM​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/22)slide 22 Patient.png" alt="">
                        <p>CAP KEY PATIENT​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/35_slide_22_Probe-removebg-preview.png" alt="">
                        <p>CAP KEY PROBE​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/36_slide_22_clear-removebg-preview.png" alt="">
                        <p>CAP KEY CLEAR​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/37_slide_22_cap_key_user1-removebg-preview.png"
                            alt="">
                        <p>CAP KEY USER1​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/38_slide_22_cap_key_sonoview-removebg-preview.png"
                            alt="">
                        <p>CAP KEY SONOVIEW​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/39_slide_22_report-removebg-preview.png" alt="">
                        <p>CAP KEY REPORT​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/40_slide_22_active_mode-removebg-preview.png" alt="">
                        <p>CAP KEY ACTIVE MODE​​</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-2 my-4">
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/41_slide_23_cap_key_set-removebg-preview.png" alt="">
                        <p>CAP KEY SET​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/42_slide_24_cap_key_exit-removebg-preview.png" alt="">
                        <p>CAP KEY EXIT​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/43_slide_24_cap_key_change-removebg-preview.png"
                            alt="">
                        <p>CAP KEY CHANGE​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/44_slide_24_cap_key_freeze-removebg-preview.png"
                            alt="">
                        <p>CAP KEY FREEZE​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/45_slide_24_cap_key_caliper-removebg-preview.png"
                            alt="">
                        <p>CAP KEY CALIPER​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/46_slide_24_cap_key_calculation-removebg-preview.png"
                            alt="">
                        <p>CAP KEY CALCULATION​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/46_slide_24_cap_key_update-removebg-preview.png"
                            alt="">
                        <p>CAP KEY UPDATE​​</p>
                    </div>
                    <div class="text-center  transform transition duration-500 hover:scale-110">
                        <img class="mx-auto" src="/img/47_slide_23_cap_key_pointer-removebg-preview.png"
                            alt="">
                        <p>CAP KEY POINTER​​</p>
                    </div>
                </div>
            </section>
            <section class="px-10 py-10 bg-base-200" id="diagnosis-mode">
                <h1 class="uppercase text-3xl  mb-5 text-primary">Diagnosis Mode</h1>
                <h2 class="text-xl text-secondary">1. Basic Mode</h2>

                <div class="my-3">
                    <h3>2D Mode​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <p>This basic mode, also referred to as B Mode (Brightness mode), provides scan planes of
                            organs. This is used to display two-dimensional anatomy images in the direction of scanning
                            in real time.​</p>
                        <a href="/img/48)slide25.. 2D mode.png" data-fslightbox="diag"><img
                                src="/img/48)slide25.. 2D mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>M Mode​​</h3>
                    <div class="grid md:grid-cols-1 gap-3">

                        <ul class="list-disc ">
                            <li>
                                The M Mode is used to specify an observation area in a 2D image with the M Line, and
                                display changes over time.​</li>
                            <li>This mode is appropriate for the observation of organs with a lot of movement such as
                                cardiac valves. The 2D Mode image is also shown, allowing the marking and adjustment of
                                an observation area within the entire image.​
                            </li>
                        </ul>
                        <a href="/img/49)slide 26..M  mode.png" data-fslightbox="diag"><img
                                src="/img/49)slide 26..M  mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>Color Doppler Mode​​</h3>
                    <div class="grid md:grid-cols-1 gap-3">

                        <ul class="list-disc ">
                            <li>
                                This mode displays the colored blood flow pattern of the ROI (Region of Interest) within
                                the 2D image.​</li>
                            <li>It is appropriate for examining the presence of the blood flow, its average speed and
                                direction. The 2D Mode image is also shown allowing the marking and adjustment of the
                                ROI within the entire image.​
                            </li>
                        </ul>
                        <a href="/img/50)slide 27.. Color doppler mode.png" data-fslightbox="diag"><img
                                src="/img/50)slide 27.. Color doppler mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>Power Doppler Mode​​</h3>
                    <div class="grid md:grid-cols-1 gap-3">

                        <ul class="list-disc ">
                            <li>This mode displays the color intensity of blood flow within the ROI in the 2D image.
                            </li>
                            <li>It is appropriate for examining the presence and amount of blood flow. The 2D Mode image
                                is also shown, allowing the marking and adjustment of the ROI within the entire image.
                            </li>
                        </ul>
                        <a href="/img/51)slide 28 Power Doppler Mode.png" data-fslightbox="diag"><img
                                src="/img/51)slide 28 Power Doppler Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>PW Spectral Doppler Mode​​​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <ul class="list-disc ">
                            <li>PW stands for Pulse Wave. PW Spectral Doppler Mode gives information on the speed of
                                blood flow at a specific site in the form of a spectral trace and audio signal. Distance
                                (depth) information can also be obtained by transmitting pulses over time frames. </li>
                            <li>This mode is useful for measuring low-speed blood flow such as in the abdomen and
                                peripheral vessels. The 2D Mode image is also shown, allowing the marking and adjustment
                                of an observation area within the entire images.
                            </li>
                        </ul>
                        <a href="/img/52)slide 29 PW Spectal Doppler Mode.png" data-fslightbox="diag"><img
                                src="/img/52)slide 29 PW Spectal Doppler Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>CW Spectral Doppler Mode​​​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <ul class="list-disc ">
                            <li>CW stands for Continuous Wave. PW Spectral Doppler Mode gives information on the
                                speed/direction of blood flow at a specific site in the form of a spectral trace and
                                audio signal. Unlike PW Spectral Doppler Mode, it does not provide Sample Volume.</li>
                            <li>This mode is available with a Phase Array Probe only.
                            </li>
                            <li>The 2D Mode image is also shown, allowing the marking and adjustment of an observation
                                area within the entire image.</li>
                        </ul>
                        <a href="/img/53)CW Spectral Doppler Mode.png" data-fslightbox="diag"><img
                                src="/img/53)CW Spectral Doppler Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>TDI Mode ​​​​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <ul class="list-disc ">
                            <li>TDI stands for Tissue Doppler Imaging. It represents movements of tissues such as a
                                heart.</li>
                            <li>This function appears in the Soft Menu only when a Phased Array Probe is used for
                                cardiac application.
                            </li>
                        </ul>
                        <a href="/img/54)slide 31 TDI Mode.png" data-fslightbox="diag"><img
                                src="/img/54)slide 31 TDI Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>TDW Mode ​
                        ​​​​​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <ul class="list-disc ">
                            <li>TDW stands for Tissue Doppler Wave. It represents movements of tissues such as a heart.
                            </li>
                            <li>TDW is available only when the cardiac application with a Phased Array probe is selected
                            </li>
                        </ul>
                        <a href="/img/55)slide 32 TDW Mode.png" data-fslightbox="diag"><img
                                src="/img/55)slide 32 TDW Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <h2 class="uppercase text-xl my-4 text-secondary">2. MULTI-IMAGE MODE​</h2>
                <div class="my-3">
                    <h3>Dual Mode​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <ul class="list-disc ">
                            <li>Compare two different images at the same time. Each time press the Dual button, one of
                                the two images is selected. The current active image mode is displayed as a yellow line
                                at the top.
                            </li>
                            <li>Button and menu items for the current image mode are displayed.
                            </li>
                        </ul>
                        <a href="/img/56)slide 34 Dual Mode.png" data-fslightbox="diag"><img
                                src="/img/56)slide 34 Dual Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div class="my-3">
                    <h3>Quad Mode​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <ul class="list-disc ">
                            <li>Compare four different images at the same time. Each time press the ESC key, one of the
                                four images is selected. The current active image mode is displayed as a yellow line at
                                the top. The button controls and menus of the active image mode are used.​
                            </li>
                        </ul>
                        <a href="/img/7)slide 35 Quad Mode.png" data-fslightbox="diag"><img
                                src="/img/57)slide 35 Quad Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <h2 class="uppercase text-xl my-4 text-secondary">3. 3D / 4D MODE​​</h2>
                <div class="my-3">
                    <h3>Quad Mode​</h3>
                    <div class="grid md:grid-cols-1 gap-3">
                        <ul class="list-disc ">
                            <li>3D Mode​<br>
                                In this mode, 3D or standard probes are used to obtain 3D images.
                            </li>
                            <li>4D Mode​<br>
                                In this mode, a 3D probe is used to obtain 3D images in real time. It is also called
                                Live 3D Mode​
                            </li>
                        </ul>
                        <a href="/img/58)slide 36 3D 4D Mode.png" data-fslightbox="diag"><img
                                src="/img/58)slide 36 3D 4D Mode.png" alt=""
                                class="w-full max-w-xl mx-auto"></a>
                    </div>
                </div>
                <div>
                    <h2 class="uppercase text-xl my-4 text-secondar"> EVOLUTION OF ULTRASOUND TECHNOLOGY: FROM 2D TO HD
                        IMAGING</h2>
                    <ul class="list-disc">
                        <li>
                            <strong>2D:</strong> This is the standard ultrasound technology used in hospitals and
                            doctors' offices. High frequency, non-ionized sound waves can only travel in one plane in
                            two dimensions. A picture of the infant in black and white is returned by the sound waves.
                            2D ultrasounds are frequently used in medical settings to assess fetal anatomy and
                            morphology. They also perform gender determination using 2D technology at elective
                            facilities.
                        </li>
                        <li>
                            <strong>3D:</strong> The evolution of medical technology led to the adoption of image volume
                            data acquisition for the development of 3D ultrasound. The application of 3D technology is
                            comparably safe to 2D, as it utilizes the same high-frequency sound waves. The ultrasound
                            machine seamlessly integrates these sound wave reflections with advanced high-speed
                            computing software to generate a three-dimensional image, capturing the diverse angles of
                            reflection. In elective facilities, 3D technology is employed to provide an immersive and
                            detailed visualization of the baby, allowing parents to observe their child with exceptional
                            clarity.
                        </li>
                        <li>
                            <strong>4D:</strong> The addition of real-time functionality to 3D ultrasound technology
                            results in the creation of 4D ultrasound. Real-time imaging is considered the fourth
                            dimension, allowing live visualization of the ultrasound scan as it is being conducted,
                            enabling immediate observation of the developing fetus. This means that parents have the
                            opportunity to watch their baby in real-time during the ultrasound procedure.
                        </li>
                        <li>
                            <strong>HD:</strong> HD stands for "High Definition" and shares the same idea as other HD
                            technologies available on the market; it provides a more sharp, clear, and defined image.
                            Compared to earlier models, the ultrasound system extracts a lot more information from the
                            3D/4D data, producing incredibly detailed images of the baby. Even some elective facilities
                            have called it "5D" technology.
                        </li>
                    </ul>
                    <div class="gallery grid grid-cols-3">
                        <div class="flex items-center justify-center">
                            <figure class="relative max-w-xs cursor-pointer">
                                <a href="img/2D IMAGE.png" data-fslightbox="gallery">
                                    <img class="rounded-lg shadow-xl hover:shadow-2xl" src="img/2D IMAGE.png"
                                        alt="" title="3D Image">
                                </a>
                                <figcaption class="absolute text-lg -mt-16 text-white px-4">
                                    <div>
                                        <h1>2D Image</h1>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="flex items-center justify-center">
                            <figure class="relative max-w-xs cursor-pointer">
                                <a href="img/3D IMAGE.png" data-fslightbox="gallery">
                                    <img class="rounded-lg shadow-xl hover:shadow-2xl" src="img/3D IMAGE.png"
                                        alt="" title="3D Image">
                                </a>
                                <figcaption class="absolute text-lg -mt-16 text-white px-4">
                                    <div>
                                        <h1>3D Image</h1>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="flex items-center justify-center">
                            <figure class="relative max-w-xs cursor-pointer">
                                <a href="img/4D IMAGE 1.png" data-fslightbox="gallery">
                                    <img class="rounded-lg shadow-xl hover:shadow-2xl" src="img/4D IMAGE 1.png"
                                        alt="" title="4D Image">
                                </a>
                                <figcaption class="absolute text-lg -mt-16 text-white px-4">
                                    <div>
                                        <h1>4D Image</h1>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="flex items-center justify-center">
                            <figure class="relative max-w-xs cursor-pointer">
                                <a href="img/4D IMAGE 2.png" data-fslightbox="gallery">
                                    <img class="rounded-lg shadow-xl hover:shadow-2xl" src="img/4D IMAGE 2.png"
                                        alt="" title="4D Image">
                                </a>
                                <figcaption class="absolute text-lg -mt-16 text-white px-4">
                                    <div>
                                        <h1>4D Image</h1>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="flex items-center justify-center">
                            <figure class="relative max-w-xs cursor-pointer">
                                <a href="img/5D IMAGE.png" data-fslightbox="gallery">
                                    <img class="rounded-lg shadow-xl hover:shadow-2xl" src="img/5D IMAGE.png"
                                        alt="" title="5D Image">
                                </a>
                                <figcaption class="absolute text-lg -mt-16 text-white px-4">
                                    <div>
                                        <h1>5D Image</h1>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @push('scripts')
        <script>
            const swiper = new Swiper('.swiper', {
                loop: true,
                autoplay: true,

                // If we need pagination
                // pagination: {
                //     el: '.swiper-pagination',
                // },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        </script>

        <script>
            const nav = document.querySelector('.menu.bg-base-100.w-full');
            const sections = document.querySelectorAll('#main-section section');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionId = entry.target.getAttribute('id');
                        nav.querySelector(`a[href="#${sectionId}"]`).classList.add('active');
                    } else {
                        const sectionId = entry.target.getAttribute('id');
                        nav.querySelector(`a[href="#${sectionId}"]`).classList.remove('active');
                    }
                });
            }, {
                rootMargin: "-200px 0px -200px 0px",
                threshold: 0,
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        </script>
    @endpush

</x-app-layout>
