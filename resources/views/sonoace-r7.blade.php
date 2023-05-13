<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('SONOACE R7') }}
        </h2>
    </x-slot>
    <div class="flex h-[calc(100vh-9rem)]" data-aos="fade-up">
        <div class="w-64 sticky top-0 h-full bg-gray-100">
            <ul class="menu bg-base-100 w-full">
                <li><a class="active" href="#block-diagram">Block Diagram</a></li>
                <li><a href="#phantom">Phantom(Multi-tissue ultrasound phantom)</a></li>
                <li><a href="#probe">Probe</a></li>
            </ul>
        </div>
        <div id="main-section" class="flex-1 overflow-y-auto p-4">
            <section class="p-10" id="block-diagram">
                <h1 class="text-2xl">BLOCK DIAGRAM</h1>
                <img src="/img/59) slide 38 block diagram.png" alt="" class="mx-auto">
                <p>SONOACER7 consists of the following major components.​</p>

                <ol class="list-decimal my-3">
                    <li>Ultrasound System Part : PSA, Main Board, CW Board, DC to DC Power Module​</li>

                    <li>User Interface Part : LCD Monitor, Control Panel, Track Ball, Alphanumeric Keyboard</li>
                </ol>
                <p class="my-3">Front End Part refers to the CW (Continuous Wave) Board, PSA (Probe Select Assembly),
                    and BF
                    (Beamformer) Board of the Ultrasound System Part. The Front End Part delivers High Voltage Pulser to
                    the probe so that ultrasound is generated, amplifies the returned echo signal and processes Digital
                    Beamforming. The RF signal generated here is delivered to the Back End Part.​</p>
                <p class="my-3">
                    Back End Part refers to the BE(Back End) Board and PC of the Ultrasound System Part. ​

                    The RF signal generated in the BF(Beamformer) Board is processed to diagnosis image such as BW,
                    Color Doppler, PW Doppler, CW Doppler, and Power Doppler and displayed on the monitor so that users
                    can see it. ​

                    User Interface Part refers to the LCD monitor and control panel​</p>
            </section>
            <section class="p-10" id="phantom">
                <h1 class="text-2xl">PHANTOM CIRS ( General Purpose Multi-Tissue Ultrasound Phantom)​</h1>
                <h2 class="my-4">Introduction ​</h2>

                <ul class=" my-3">
                    <li>
                        <div class="flex">
                            <p class="w-2/3">

                                The most comprehensive solution for performance and quality assurance testing is
                                Multi-Tissue Ultrasound Phantom. Its dual frequency design and detachable water wells
                                enable testing of the majority of transducer shapes and frequencies, including
                                curvilinear and endocavity. Additionally, it is the only QA phantom available on the
                                market that offers both elasticity targets and every common B-mode imaging test object.​

                                ​</p><img src="/img/60)slide 40 PHANTOM.png" alt="" class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">Phantom come with detachable scanning wells to accommodate large sector
                                probe and small
                                endocavity probe.

                                ​</p><img src="/img/61)slide 41 detachable scanning.png" alt="" class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">It is packaged in a hermetically sealed, air tight, rugged carrying case.
                                ​</p><img src="/img/62)slide 41 casing bag.png" alt="" class="w-1/3">
                        </div>
                    </li>

                </ul>

                <h2 class="my-4">KEY PERFORMANCE MEASUREMENT​​</h2>
                <div>
                    <img src="/img/63)slide 42 KEY PERFORMANCE MEASUREMENT1.png" alt="" class="w-2/3 mx-auto">
                    <img src="/img/63)slide 42 KEY PERFORMANCE MEASUREMENT 2.png" alt="" class="w-2/3 mx-auto">
                </div>
                <ul class="list-decimal my-3">
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                Take out the phantom

                                ​</p><img src="/img/64)slide 43 Ultrasound Phantom Set Up 1.png" alt=""
                                class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                Remove the cover
                                ​</p><img src="/img/65)slide 43 Ultrasound Phantom Set Up 2.png" alt=""
                                class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                Set up the right cover. For scannning using distilled water, the following cover is
                                used.
                                ​</p><img src="/img/66)slide 44 Ultrasound Phantom Set Up 3.png" alt=""
                                class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                Fill the phantom with distilled water​
                                ​</p><img src="/img/67) slide 44 Ultrasound Phantom Set Up 4.png" alt=""
                                class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                Put the probe on top of the phantom​
                                ​</p><img src="/img/68)slide 44 Ultrasound Phantom Set Up 5.png" alt=""
                                class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                When the scanning is done , throw away the water. The phantom is cleaned gently with
                                tissue.​
                                ​</p><img src="/img/69)slide 45 Ultrasound Phantom Set Up 7.png" alt=""
                                class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                For scanning with ultrasound gel, make sure it is ultrasound gel and put some ultrasound
                                gel on the probes.​
                                ​</p><img src="/img/70)slide 45 Ultrasound Phantom Set Up 8.png" alt=""
                                class="w-1/3">
                        </div>
                        ​​
                    </li>
                    <li>
                        <div class="flex">
                            <p class="w-2/3">
                                Make sure the ultrasound gel is distributed evently.Then the probe is placed on the
                                phantom for scanning.Cover is not used for gel scanning. ​
                                ​</p>
                        </div>
                        ​​
                    </li>
                </ul>
                <h2 class="my-4">OUTLINE</h2>
                <div class="card card-side bg-base-100 shadow-xl">
                    <figure class="w-1/3"> <img src="/img/71)slide 47 uniformity.png" alt=""></figure>
                    <div class="card-body w-2/3">
                        <h2 class="card-title">Uniformity​</h2>
                        <ul class="list-disc">
                            <li>The ability of the machine to display echoes of the same magnitude and depth with equal
                                bright-ness on the display.</li>
                            <li>It is a test to ensure all crystal within the transducer are functioning.</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2  text-lg">Uniformity Test Procedure​</h3>
                    <ul class="list-decimal">
                        <li>
                            Apply coupling gel to the scanning surface or fill the water through with tap water.​</li>

                        <li>Position the transducer on the scanning surface in a region with minimum number of
                            targets.​​
                        </li>

                        <li>Adjust the instrument settings(gain, TGC, output, etc.) as for a “normal” liver technique.
                            Record the settings for use on subsequent testing.​​</li>

                        <li>Align the probe so that the targets are maximized.​​</li>

                        <li>Freeze the image and obtain a hard copy.​​</li>

                        <li>Observed the general appearance of the phantom.Note if all regions at the samedepth
                            displayed
                            with the same intensity across the image.​

                        <li>Record your observation​</li>
                    </ul>
                </div>
                <div class="card card-side bg-base-100 shadow-xl my-2">
                    <figure class="w-1/3"> <img src="/img/72)slide 49 near field resolution.png" alt="">
                    </figure>
                    <div class="card-body w-2/3">
                        <h2 class="card-title">Near Field Resolution</h2>
                        <ul class="list-disc">
                            <li>The ability of the machine to display echoes of the same magnitude and depth with equal
                                brightness on the display.​</li>
                            <li>It is a test to ensure all the crystal within the transducer are functioning.</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">Near Field Test Procedure​​</h3>

                    <ul class="list-decimal">
                        <li>
                            Apply coupling gel to the scanning surface or fill the water through with tap water.​</li>

                        <li>Position the transducer above the near field resolution target and perpendicular to the
                            wires.
                            (The wire should appear as dots, not line).​</li>

                        <li>Adjust the instrument settings(gain, TGC, output, etc.) to maximize resolution in the near
                            field. Record the settings for use on subsequent testing.​</li>

                        <li>Freeze the image while the near field targets are clearly displayed.​</li>

                        <li>Count how many wires of the near field target you can see.Substracting this number from the
                            total numberof targets gives you the dead zone measurement.​<br>
                            <code>
                                Ex: total # of target in group= 5​

                                # of targets actually seen = 3​

                                dead zone distance= 5-3=2 mm​</code>
                        </li>

                        <li>An alternative methide uses the electronic calipers to measure the distance between the
                            transducer face and the closest wire target to be resolved from the reverberation.If the
                            first
                            target to be resolved is at 4 mm, tehn the dead zone distance is “ something less than 4
                            mm”.​
                        </li>
                        <li>Record the distance and compare the baseline measurements.​
                        </li>
                    </ul>
                </div>
                <div class="card card-side bg-base-100 shadow-xl my-2">

                    <div class="card-body w-2/3">
                        <h2 class="card-title">Depth Of Penetration </h2>
                        <ul class="list-disc">
                            <li>It is called maximum depth of visualization or sensitivity , is the greatest distance in
                                a
                                phantom for which echo signals due to the scatterers within the tissue mimicking
                                background
                                material can be detected on the display.​</li>

                            <li>The depth of penetration is determines by the frequency of the transducer, the
                                attenuation of
                                the medium being imaged and the system settings.​</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">Depth Of Penetration Procedures​​​</h3>
                    <ul class="list-decimal">

                        <li>Apply coupling gel to the scanning surface or fill the water through with tap water.​</li>

                        <li>Position the transducer above the near field resolution target and perpendicular to the
                            wires.
                            (The
                            wire should appear as dots, not line).​</li>

                        <li>Adjust the instrument settings(gain, TGC, output, etc.) to maximize resolution in the near
                            field.
                            Record the settings for use on subsequent testing.​</li>

                        <li>Align the probe so that all the verticle targets are displayed at their maximum intensity
                            level.​</li>

                        <li>While actively scanning, look to see where the scatterers within the background material
                            disappear.Be carefull not to confuse electronic noise with the background
                            scatterers.Electronic
                            noise will move, scatterers will remain stationary.​</li>

                        <li>Freeze the image.​</li>

                        <li>With elkectronic calipers measure the distance between the scanning surface and the last
                            identifiable echo due to scattering.Note: The wire may be visible even though the scatterers
                            are
                            not. Remember to measure thye distance to the scatterers not the last visible wire.​</li>

                        <li>Record the distance on a record sheet and compare with baseline depth.​</li>
                    </ul>
                </div>
                <div class="card card-side bg-base-100 shadow-xl my-2">

                    <div class="card-body w-2/3">
                        <h2 class="card-title">Focal Point​</h2>
                        <ul class="list-disc">
                            <li>The narrowest region within the beam profile. ​​</li>

                            <li>Minimum lenght of target​</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <h3 class="my-2 text-lg">Focal Point Test Procedure​​</h3>
                <ul class="list-decimal">
                    <li>Apply coupling gel to the scanning surface or fill the water through with tap water.​
                    </li>

                    <li>Position the transducer above the near field resolution target and perpendicular to the
                        wires.
                        (The
                        wire should appear as dots, not line).​</li>

                    <li>Adjust the instrument settings(gain, TGC, output, etc.) to maximize resolution in the
                        near
                        field.
                        Record the settings for use on subsequent testing.​</li>

                    <li>Align the probe so that all the vertical targets are displayed at their maximum
                        intensity
                        level.​</li>

                    <li>Freeze the image and obtain the hard copy.​</li>

                    <li>Some of the targets will appear as short lines rather than dots on the froze image.​
                    </li>

                    <li>Measure the lenght of the targets.These measurement are the lateral response width of
                        the system
                        at
                        the different depths and setup. The minimum lenght indicates the focal point.​</li>

                    <li>If a smooth curve is drawn to connect the edges of the targets. the beam profile easily
                        is
                        easily
                        discernible. ​</li>

                    <li>If using a variable focused transducer , repeat the above procedure for several
                        different focal
                        zones(those settings most commonly used are recommended).​</li>

                    <li>Record the focal point and save the hard copy.​</li>
                </ul>
                <div class="card card-side bg-base-100 shadow-xl  my-2">
                    <figure class="w-1/3"> <img src="/img/73)slide 55 vertical distance.png" alt="">
                    </figure>

                    <div class="card-body w-2/3">
                        <h2 class="card-title">Vertical Distance​</h2>
                        <ul class="list-disc">
                            <li>Defines as the distance along the axis of the beam.</li>
                            <li>Distance are used to measure areas, volumes , depths, and sizes of the objects.</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">Vertical Distance ​​​​ Procedures​​​</h3>
                    <ul class="list-decimal">
                        <li>Apply coupling gel to the scanning surface or fill the water through with tap water.​
                        </li>

                        <li>Position the transducer above the near field resolution target and perpendicular to the
                            wires.
                            (The
                            wire should appear as dots, not line).D o not apply excessive pressure as this may
                            temporarily
                            compress the target and skew the measurement.​</li>

                        <li>Adjust the instrument settings(gain, TGC, output, etc.) to maximize resolution in the
                            near
                            field.
                            Record the settings for use on subsequent testing.​</li>

                        <li>Align the probe so that all the vertical targets are displayed at their maximum
                            intensity
                            level.​</li>

                        <li>Freeze the image and obtain the hard copy.​</li>

                        <li>Using electronic calipers measure the distance between two wires at various depths or
                            align the
                            echoes to the display markers for comparison.​</li>

                        <li>Record these measurements.​</li>

                        <li>Compare the measured values with the recorded baseline distances.​</li>

                    </ul>
                </div>
                <div class="card card-side bg-base-100 shadow-xl  my-2">
                    <figure class="w-1/3"> <img src="/img/74)slide 57 horizontal distance.png" alt="">
                    </figure>

                    <div class="card-body w-2/3">
                        <h2 class="card-title">Horizontal Distance​</h2>
                        <ul class="list-disc">
                            <li>Is used to determine the accuracy of measurements made perpendicular to the beam
                                axis and is
                                critical for the same reasons as vertical distance measurements.</li>
                            <li>These are to horizontal plane target groups.The 3 cm deep group contains 4 wires
                                with
                                spacing of 10 mm and 20 mm. The 9 cm deep group has 20 mm spacing between each of 7
                                wires.
                            </li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">Horizontal Distance Procedure​​​​</h3>
                    <ul class="list-decimal">
                        <li>Apply coupling gel to the scanning surface or fill the water through with tap water.
                        </li>
                        <li>Position the transducer above the near field resolution target and perpendicular to the
                            wires.
                            (The wire should appear as dots, not line). Do not apply excessive pressure as this may
                            temporarily compress the target and skew the measurement.</li>
                        <li>Adjust the instrument settings(gain, TGC, output, etc.) to maximize resolution in the
                            near
                            field. Record the settings for use on subsequent testing.</li>
                        <li>Align the probe so that all the horizontal targets are displayed at their maximum
                            intensity
                            level.</li>
                        <li>Freeze the image and obtain the hard copy.</li>
                        <li>Using electronic calipers measure the distance between two wires at various depths or
                            align the
                            echoes to the display markers for comparison.</li>
                        <li>Record these measurements.</li>
                        <li>Compare the measured values with the recorded baseline distances.</li>
                    </ul>
                </div>

                <div class="card card-side bg-base-100 shadow-xl  my-2">
                    <figure class="w-1/3"> <img src="/img/75)slide 59 axial resolution.png" alt=""></figure>

                    <div class="card-body w-2/3">
                        <h2 class="card-title">Axial Resolution​</h2>
                        <ul class="list-disc">
                            <li> Define as the ability of an ultrasound system to resolve objects in close proximity
                                along
                                the
                                axis of the beam.​</li>

                            <li>In other words, how close can two objects be along the axis of the beam and still be
                                detected as
                                two distints objects?​</li>

                            <li>Axial resolution is proportional to the lenght of the system’s transmitted
                                ultrasonic pulse
                                or
                                pulse length.​</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">Axial Resolution Procedures​​​​​</h3>
                    <ul class="list-decimal">
                        <li>Apply coupling gel to the scanning surface or fill the water through with tap water.​</li>

                        <li>Position the transducer above the near field resolution target and perpendicular to the
                            wires.
                            (The wire should appear as dots, not line).D o not apply excessive pressure as this may
                            temporarily compress the target and skew the measurement.​</li>

                        <li>Adjust the instrument settings(gain, TGC, output, etc.) to maximize resolution in the near
                            field. Record the settings for use on subsequent testing.​</li>

                        <li>Align the probe so that all the targets are displayed at their maximum intensity level.​
                        </li>

                        <li>Freeze the image and obtain the hard copy.​</li>

                        <li>Examine the image to determine the last pair of wires to be distinguished as two separates
                            entities. If the last pair of the last pair of wires to be resolved is separated by a
                            distance
                            of 1 mm then record the axial resolution as being “ in between 0.5 mm and 1.0 mm”.​</li>
                    </ul>
                </div>
                <div class="card card-side bg-base-100 shadow-xl  my-2">
                    <figure class="w-1/3"> <img src="/img/76)slide 61 lateral resolution.png" alt="">
                    </figure>

                    <div class="card-body w-2/3">
                        <h2 class="card-title">Lateral Resolution ​​</h2>
                        <ul class="list-disc">
                            <li>Is similar to axial resolution except it is concerned with teh resolution perpendicular
                                to the beam axis.​</li>

                            <li>Lateral resolution will improve with a narrowing of beam width.Therefore, within the
                                focal zone, the lateral resolution will be at its best.​</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">Lateral Resolution Procedures​</h3>
                    <ul class="list-decimal">
                        <li>Apply coupling gel to the scanning surface or fill the water through with tap water.</li>
                        <li>Position the transducer above the near field resolution target and perpendicular to the
                            wires. (The wire should appear as dots, not line). Do not apply excessive pressure as this
                            may temporarily compress the target and skew the measurement.</li>
                        <li>Adjust the instrument settings(gain, TGC, output, etc.) to maximize resolution in the near
                            field. Record the settings for use on subsequent testing.</li>
                        <li>Align the probe so that all the targets are displayed at their maximum intensity level.</li>
                        <li>Freeze the image and obtain the hard copy.</li>
                        <li>Examine the image to determine the distance between the last two wires as to be resolved as
                            two distinct objects. Record this distance as the lateral resolution.</li>
                    </ul>
                </div>
                <div class="card card-side bg-base-100 shadow-xl  my-2">
                    <figure class="w-1/3"> <img src="/img/77)slide 63 low scatter.png" alt="">
                    </figure>

                    <div class="card-body w-2/3">
                        <h2 class="card-title">Low Scatter​​​</h2>
                        <ul class="list-disc">
                            <li>A diagnol row of cylinders having no scatter is provided in the phantom to test a
                                machine’s ability to image cyst-like structure of varying size and depth in two
                                different backgrounds.​</li>

                            <li>Cylinder diameters range from 8 mm to 2 mm at depths of 8 cm to 2 cm respectively.Refer
                                to the target diagram attached to your phantom.​​</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">Low Scatter Procedure​​</h3>
                    <ul class="list-decimal">
                        <li>Apply coupling gel to the scanning surface or fill the water through with tap water.</li>
                        <li>Position the transducer above the cyst of interest and perpendicular to the wires. You
                            should be imaging the circular cross section of the cylinders.</li>
                        <li>Adjust the instrument settings(gain, TGC, output, etc.) as for a “normal” liver technique.
                            Record the settings for use on subsequent testing.</li>
                        <li>Align the probe so that the target is maximized.</li>
                        <li>Freeze the image and obtain the hard copy.</li>
                        <li>Observe the general appearance of each cystic structure. Note if there is fill in and if you
                            are also able to see each of the masses.</li>
                        <li>A more detailed analysis can be performed by measuring the width and height of each mass.
                        </li>
                        <li>Record your observations.</li>
                    </ul>
                </div>

                <div class="card card-side bg-base-100 shadow-xl  my-2">
                    <figure class="w-1/3"> <img src="/img/78)slide 65 high scatter.png" alt="">
                    </figure>

                    <div class="card-body w-2/3">
                        <h2 class="card-title">High Scatter ​
                            ​​​​</h2>
                        <ul class="list-disc">
                            <li>A diagonal row of cylinders having contrast that is +15dB with respect to the background
                                material is provided in the phantom to test a machine’s ability to image solid tumors of
                                varying size and depth.​</li>

                            <li>Cylinder diameters range from 8 mm to 2 mm at depth of 8 cm to 2 cm respectively.​​​
                            </li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="#video-tutorial">Watch</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="my-2 text-lg">High Scatter Procedure​​</h3>
                    <ul class="list-decimal">
                        <li>Apply coupling gel to the scanning surface or fill the water through with tap water.</li>
                        <li>Position the transducer above the tumor of interest and perpendicular to the wires. (The
                            tumor should appear as a circular region).</li>
                        <li>Adjust the instrument settings (gain, TGC, output, etc.) as for a “normal” liver technique.
                            Record the settings for use on subsequent testing.</li>
                        <li>Align the probe so that the target is maximized.</li>
                        <li>Freeze the image and obtain the hard copy.</li>
                        <li>Observe the general appearance of each tumor. Note if you are able to see each of the
                            masses.</li>
                        <li>A more detailed analysis can be performed by measuring the width and height of each mass.
                        </li>
                        <li>Record your observations.</li>
                        <li>Record your observations.</li>
                    </ul>
                </div>
                <div id="video-tutorial" class="my-4 text-center">
                    <h3 class="text-lg">TUTORIAL OF HOW TO USE THE PHANTOM TO PERFORM THE TEST​</h3>
                    <video width="320" height="240" controls class="mx-auto">
                        <source src="img/video how to use phantom slide67.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="my-4 text-center">
                    <h3 class="text-lg">AXIAL RESOLUTION AND LATERAL RESOLUTION TEST​​</h3>
                    <video width="320" height="240" controls class="mx-auto">
                        <source src="img/video axial resolution slide 68.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="my-4 text-center">
                    <h3 class="text-lg">VERTICAL DISTANCE AND HORIZONTAL TEST​​</h3>
                    <video width="320" height="240" controls class="mx-auto">
                        <source src="img/video low scatter slide 70.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </section>
            <section class="p-10" id="probe">
                <h1 class="text-2xl mb-4">PROBE</h1>
                <p>The probe is a device that sends and receives ultrasound for acquiring image data. It is also called
                    a Transducer or Scanhead.​</p>

                <p class="my-2">The ultrasound image scanner uses probes to obtain graphic data of the human body and
                    then displays
                    it on the screen. Always use application-specific probes in order to obtain the best quality images.
                    It is also important to configure the probe with the best settings for the particular organ being
                    scanned</p>

                <img src="img/79)slide 71 probe.png" class="mx-auto w-1/2" alt="">

                <div class="my-2">
                    <h3 class="font-semibold">Probe Application and Preset​</h3>
                    <p>Probes, applications and settings available for this product are as follows​
                        curvelinear , volume probe </p>
                    <img src="img/80)slide 72.png" class="mx-auto my-4 w-1/2" alt="">
                </div>

                <div class="grid md:grid-cols-2">
                    <div class="card card-compact w-96 bg-base-100 shadow-xl">
                        <figure><img src="/img/81)slide 73 probe curvilear.png" alt="probe1" />
                        </figure>
                        <div class="card-body">
                            <p>The Curvelinear Probe C2-8 is used in scanning 2D images of the abdomen, obstetrics, and
                                gynaecology.​</p>
                        </div>
                    </div>
                    <div class="card card-compact w-96 bg-base-100 shadow-xl">
                        <figure><img src="img/82) slide 73... 3d 4d probe.png" alt="probe2" />
                        </figure>
                        <div class="card-body">
                            <p>3DC2-6 Probes are used in 3D/4D image scanning of the abdomen, obsentrics, and
                                gynaecology. ​
                            </p>
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
                console.log(entries)
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
                rootMargin: "-30px",
                threshold: 0,
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        </script>
    @endpush

</x-app-layout>
