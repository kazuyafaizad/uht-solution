<x-app-layout>
    <style>
        .footer {
            display: none;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('TECHNICAL PART') }}
        </h2>
    </x-slot>
    <div class="flex h-[calc(100vh-7.5rem)]" data-aos="fade-up">
        <div class="w-1/3 sticky top-0 h-full bg-base-200">
            <ul class="menu bg-base-100 w-full">
                <li><a class="active" href="#troubleshooting">Troubleshooting</a></li>
                <li><a href="#maintenance">Maintenance</a></li>
                <li><a href="#type-of-maintenance">Type of maintenance​</a></li>
                <li><a href="#safety">Safety​</a></li>
            </ul>
        </div>
        <div id="main-section"
            class="flex-1 overflow-y-auto p-4 scrollbar-thin scrollbar-thumb-primary scrollbar-track-white">
            <section class="p-10" id="troubleshooting">
                <h1 class="uppercase text-3xl mb-5 text-primary">Troubleshooting</h1>

                <div class="alert alert-warning shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span>
                            <p class="text-lg ">Problem : Power Failure ( Power cannot turn off and Power is
                                automatically turned off)​​</p>
                        </span>
                    </div>
                </div>
                <p class="text-lg my-4">Procedures for troubleshooting expected problems are described. Unexpected
                    situations may occur.​</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Power cannot be turned off</h2>
                            <p>A software error or PC Motherboard or Main Board problem is likely.​</p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>The power is automatically turned off when the Power Switch is pressed for more than
                                    3seconds. If software such as printer software is running or an operating system
                                    error
                                    occurs, the power is not turned off.​</li>
                                <li>If you cannot turn the power off after completing the procedures in 1), a PC
                                    Motherboard
                                    or Main Board problem is likely.​</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Power is automatically turned off​</h2>
                            <p>Power cord, PC Mother Board, Main Board trouble is expected.​</p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Check if the power cord is properly connected.​</li>
                                <li>Check the fuse status.​​</li>
                                <li>Connect another device to the wall outlet and check if it works.​If the device
                                    works, it is due to Power Supply problem.​If the device does not work, it is due to
                                    wall outlet problem.​​​</li>
                                <li>If the power is automatically turned off after completing the procedures of “1), 2),
                                    and 3)”,PC Mother Board, Main Board trouble is expected​​</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="alert alert-warning shadow-lg my-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span>
                            <p class="text-lg ">MONITOR ​( Blank Screen & Screen Color Abnormal)​​</p>
                        </span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Blank Screen</h2>
                            <p>DVI Cable, Monitor or Main Board trouble is expected.​</p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Try to print to check the product status.​
                                    If printing is normal, monitor or PC Part trouble is expected.​​</li>
                                <li>Check the cable is properly connected with the monitor.​​</li>
                                <li>Check the DVI Cable of LCD Monitorproperly connected with the Main Board.​​​</li>
                                <li>If no problem has been found in the above “1) and 2)”, monitor and PC Part trouble
                                    is expected.​​​​</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Screen Color is Abnormal​​</h2>
                            <p>Data Cable of the monitor or PC Part is improperly connected or monitor or PC Part
                                trouble is expected.​​</p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Check the monitor connection cable status.​Check the DVI Cable of LCD
                                    Monitorproperly connected with the Main Board.​​</li>
                                <li>If no problem has been found in the above “1)”, monitor and PC Part trouble is
                                    expected.​​</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="alert alert-warning shadow-lg my-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span>
                            <p class="text-lg ">ERROR MESSAGES​ (System hangs after an error during booting & System
                                works even if or occurred)</p>
                        </span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">System hangs after an error during booting ​</h2>
                            <p>Temporary software error or product trouble is expected.​</p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Turn the power off by force and then turn it on again after 1 to 2 minutes. ​​</li>
                                <li>If the symptom continues after completing “1)”, check when the error message
                                    appears​​</li>
                            </ul>
                            <p>If the error message appears while SonoAce R7 logo appears, system software or ultrasound
                                system part trouble is expected.</p>
                        </div>
                    </div>
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">System works even if an error occurred​​​</h2>
                            <p>Temporary software error or product trouble is expected.​</p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Turn the power off by force and then turn it on again after 1 to 2 minutes. ​​</li>
                                <li>If the symptom continues after completing “1)”, check when the error message
                                    appears.​
                                    If the error message appears while SonoAce R7 logo appears, system software or
                                    ultrasound system part trouble is expected.​​​</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="alert alert-warning shadow-lg my-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span>
                            <p class="text-lg ">IMAGE​
                                (No B-Mode Image Echo, No BW Mode Image Format, Noise Link Rain over the BW Mode Image
                                (Noise)&PW & CW & Color Doppler, M Mode Trouble)​
                                ​</p>
                        </span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">No B-Mode Image Echo ​​</h2>
                            <p>Probe and the system connection, Main Board or Power trouble is expected.​</p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Check the connection between the probe and the system.​​</li>
                                <li>Check if probe oscillation sound is heard.<br>If oscillation sound is heard, the
                                    problem may be (Data Display Module) DDM trouble.​​​​</li>
                                <li>Check if the (Automatic Dynamic Range)ADM of Alarm LED turn on NOR.​ <br>If LED of
                                    NOR turn on, DDM is normal.​<br>If (overvoltage protection)OVP,(overcurrent
                                    protection)OLP,( overtemperature protection)OTP of LED turn on, DDM problem is
                                    likely.​​</li>
                                <li>If no problem has been found in the above “1), 2),3) Main Board trouble is expected.
                            </ul>
                        </div>
                    </div>
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title"> No B-Mode Image Format ​​</h2>
                            <p>Probe and the system connection, Ultrasound System Part or PC Part trouble is expected.​
                            </p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Check the connection between the probe and the system.​​​</li>
                                <li>Check if probe oscillation sound is heard.​​</li>
                                <li>Check if the ADM of Alarm LED turn on NOR.<br>​If LED of NOR turn on, DDM is
                                    normal.<br>If OVP,OLP,OTP of LED turn on, DDM problem is likely.​​</li>
                                <li>If no problem has been found in the above “1), 2),3) Main Board trouble is expected.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title"> Noise Like Rain over the BW Mode Image (Noise)​ ​​</h2>
                            <p>Power noise or Main Board trouble is expected.​
                            </p>
                            <ul class="my-3 list-decimal leading-7 text-left">
                                <li>Check if the system shares the wall outlet with another device.​<br>If the system
                                    shares the wall outlet with a device that uses electric motor or consumes high
                                    power, noise may be generated.​​​</li>
                                <li>If the system shares the wall outlet with a device that uses electric motor or
                                    consumes high power, noise may be generated.​</li>
                                <li>If no problem has been found in the above “1) and 2)”, MainBoard trouble is
                                    expected.​​</li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card w-full bg-neutral text-neutral-content">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title"> PW & CW & Color Doppler, M Mode Trouble​​ ​​</h2>
                            <p>Main Board trouble is expected.
                            </p>

                        </div>
                    </div>
                    <div class="my-5">
                        <h2 class="text-lg">Causes and corrective actions​</h2>

                        <table class="table w-full">
                            <thead>
                                <tr>
                                    <th>Problems</th>
                                    <th>What to do</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>The system cannot be turned ON.</td>
                                    <td>Confirm that the power cable is connected to the outlet correctly.​ <br>

                                        Check the main switch.​</td>
                                </tr>
                                <tr>
                                    <td>The system can be turned ON, <br>but no images are displayed.</td>
                                    <td>Adjust the "CONTRAST, "BRIGHTNESS" buttons on the monitor. ​ <br>

                                        Check whether the equipment is in external video signal input mode.​</td>
                                </tr>
                                <tr>
                                    <td>Characters are displayed <br>but no images are displayed.</td>
                                    <td>Confirm that the ACOUSTIC POWER dial, GAIN dial, and STC slide
                                        <br>control are
                                        set
                                        to their max in positions.If still no images are displayed, confirm
                                        <br>that the
                                        transduce is connected to the transducer connector correctly,
                                        <br>or use a
                                        different
                                        <br>
                                        transducer.​
                                    </td>
                                </tr>
                                <tr>
                                    <td>An error dialog (error message) is <br> displayed and the operation is
                                        disabled.
                                    </td>
                                    <td>Turn the power of the system OFF and then ON "PowerON/OFF”.​

                                        ​</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </section>
            <section class="p-10" id="maintenance">
                <h1 class="uppercase text-3xl mb-5 text-primary">USER MAINTENANCE​</h1>
                <h2 class="text-xl mb-4">Fuse Replacement​</h2>
                <p>The power protection fuse protects the product from excess current. If the power monitoring
                    protection circuit detects excess current, it shuts off the current to the equipment in order to
                    prevent overheating and to restrict the ultrasound power output</p>
                <img src="img/94)slide 89 user maintenance.png">
                <ul class="list-decimal">
                    <li>Set this to off by pressing the power switch (See ①).​
                    </li>
                    <li>Disconnect the power cord from the wall outlet.​</li>
                    <li>Press down on the middle part (See ②) of the used fuse and pull out. ​​
                    </li>
                    <li>Fit the new fuse into the fuse holder, and press the fuse in to complete replacing the fuse.​
                    </li>
                </ul>
                <h2 class="text-xl my-4">Cleaning The Air Filters​​</h2>
                <p>The air filters minimize the in draft of dust. Clean the air filter to ensure that a clogged filter
                    does not cause the system to overheat and reduce the noise and the system performance. ​</p>
                <p>It is recommended the air filters be cleaned once every three months.</p>
                <img src="img/95)slide 91 filter 1.png">
                <div class="flex items-center"> <img src="img/96)slide 91 silter 2.png">
                    <ul class="list-decimal">
                        <li>Pull the flter under the front of the console to away from the product.
                        </li>
                        <li>Shake the flter to remove the dust and wash in a mild soapy solution.​</li>
                        <li>Rinse and air dry or dry with a cloth.​
                        </li>
                        <li>Slide the flter back into the product.​
                        </li>
                    </ul>
                </div>
                <h2 class="text-xl my-4">Routine maintenance inspection​​</h2>
                <p>Preventive Maintenance Performed by User</p>
                <ul class="list-decimal">
                    <li class="py-2">Cleaning the transducer​<br>
                        Clean, disinfect,and sterilize the transducer referring to the operation manual provided with
                        the transducer.</li>
                    <li class="py-2">Cleaning the transducer holder and gel holder​
                        ​<br>
                        • The transducer holder and gel holder are removable. In some cases, when the gel bottle is
                        removed from the gel holder, the gel holder may be inadvertently removed along with the gel
                        bottley be inadvertently removed along with the gel bottle. Confirm that the gel holder is not
                        removed when removing the gel bottle.​
                        <br>
                        (a)Wipe off any stains on the transducer holder and gel harder using a soft dry cloth.​<br>
                        (b)If it is difficult to remove stains, wipe of stain using a soft cloth ​<br>
                        with mild detergent and then lightly wrung out. ​
                    </li>
                    <li class="py-2">Cleaning the transducer connector​

                        ​​<br>

                        (a) Wipe off any stains on the transducer connector using a soft dry cloth.​

                        ​<br>

                        (b) If It is difficult to remove stains,wipe on stains using a soft cloth moistened with water
                        and then tightly wrung out​</li>
                    <li class="py-2">Clean the reference signal cable regularly.​

                        ​<br>

                        (a) Wipe off any stains using a soft cloth moistened with mild detergent and then tightly wrung
                        out​

                        ​<br>

                        (b) Wipe the referer noe signal cable with dry cloth and dry it well.</li>
                    <li class="py-2">Cleaning the LCD monitor​​<br>
                        Use a dean,soft cloth to clean the LCD surface.​
                        ​​<br>
                        (a) Monitor cover​​<br>​<br>
                        • Clean the monitor cover using a soft cloth moistened with mild detergent.<br>
                        (b) LCD surface​<br>​<br>
                        • Use a soft cotton cloth or lens cleaning paper to clean the LCD surface.<br>
                        • Do not hit or apply strong pressure to the LCD surface.​<br>

                        • If stains on the LCD surface are difficult to remove, wipe it gently with a soft cloth
                        slightly
                        moistened with water and thenwipe it with a soft,dry cloth.​
                    </li>
                </ul>
                <h2 class="text-xl my-4">Cleanliness and decontamination awareness</h2>
                <ul class="list-decimal">
                    <li>Clean the transducer with warm water. Swipe the surface with mild cloth. Disinfect the
                        transducer using chemical liquid germicides. Do not use methanol, ethanol, isopropanol or any
                        alcohol based product, mineral oil, iodine, lotions, lanolin, aloe Vera, olive oil, methyl or
                        ethyl parabens.​</li>

                    <li>Clean system cabinet with moisten a soft, non-abrasive folded cloth. (Do not spray any liquid
                        directly into the unit).​</li>

                    <li>Clean monitor face with a soft, folded cloth. Gently with the monitor face. Do not use a glass
                        cleaner that has a hydrocarbon base (such as benzene, methyl alcohol or methyl ethyl ketone) on
                        monitor.​</li>

                    <li>Clean the control panel with moisten a soft, non-abrasive folded cloth with a mild, general
                        purpose, non-abrasive soap and water solution (use a cotton swab to clean around the keys and
                        controls).</li>
                </ul>
            </section>
            <section class="p-10" id="type-of-maintenance">
                <h1 class="uppercase text-3xl mb-5 text-primary">TYPES OF MAINTENANCE​​</h1>
                <img src="img/97)slide 95 type of maintenance.png" class="mx-auto">
                <div>
                    <h2 class="text-lg my-4">PLAN PREVENTIVE MAINTAINANCE</h2>
                    <p class="py-2">Planned preventative maintenance (PPM), also commonly referred to as planned
                        maintenance or
                        scheduled maintenance, is essentially a scheduled maintenance routine for the assets across an
                        estate. Tasks are scheduled ahead of time, while assets are still in functioning order.​</p>
                    <p class="py-2">The technician or engineer needs to follow the PPM checklist, which involves
                        multiple tasks for
                        ensuring the ultrasound machine is in good condition.​<br>

                        Firstly, they need to check the outer/overall condition of the ultrasound machine, which is a
                        qualitative task.​​<br>

                        Secondly, they need to perform preventive maintenance tasks to keep the machine functioning
                        properly.​​<br>

                        Thirdly, they may use a tissue phantom to conduct a quantitative task that involves testing the
                        accuracy and reliability of the imaging or sensing system.​​<br>

                        Lastly, the machine must undergo an electrical safety test (EST) using an EST tester to ensure
                        that it is safe to use.​​</p>
                    <p class="py-2">Planned Preventive Maintenanc(PPM) is essential for ensuring equipment and
                        systems are in good
                        working order, reducing downtime, improving reliability, and ensuring safety and compliance.​
                    </p>
                </div>
                <div>
                    <h2 class="text-lg my-4">PLAN PREVENTIVE MAINTAINANCE CHECKLIST​</h2>
                    <img src="img/98)slide 97 ppm 1.png" class="w-full max-w-xl mx-auto">
                    <img src="img/99)slide 97 ppm 2.png" class="w-full max-w-xl mx-auto">
                    <img src="img/100)slide 97 ppm 3.png" class="w-full max-w-xl mx-auto">
                    <a href="/files/ULTRASOUND PPM CHECKLIST -97-.pdf" class="link"><small>For more information and
                            details ,click
                            this file</small></a>
                </div>
                <div>
                    <h2 class="text-lg my-4">ELECTRICAL SAFETY TEST CHECKLIST​​</h2>
                    <img src="/img/Iec 62353.png" class="w-full max-w-xl mx-auto">
                </div>
                <div>
                    <h2 class="text-lg my-4">PROCESS FLOW FOR PLANNED PRERVENTIVE MAINTENANCE</h2>
                    <img src="img/101)slide 99.png" class="w-full max-w-xl mx-auto">
                </div>
                <div>
                    <h2 class="text-lg my-4">The purpose of conducting Electrical Safety Tests (EST)</h2>
                    <p>
                        Any product that uses electricity (directly or indirectly) must undergo electrical safety
                        testing to ensure safe operating standards. IEC 60601 is a set of technical specifications for
                        the security and fundamental functionality of medical electrical equipment that were released by
                        the International Electrotechnical Commission.​</p>

                    <ul class="my-2">
                        <li class="py-2">Ensure Patient Safety ​<ul>
                                <li>-Protect against macroshock​</li>

                                <li>-Protect against microshock​</li>
                            </ul>
                        </li>

                        <li class="py-2">Test for electrical internal brekadown/ damage to power cord, AC mains
                            feed,etc​

                        <li class="py-2">Meet codes & standards​

                        <li class="py-2">Protect against legal liability​

                            <ul>
                                <li>-In case of patient incident</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg my-4">ELECTRIC SHOCK</h2>
                    <p class="font-bold mb-4">MACROSHOCK​</p>
                    An electric current passing through the body when contact is made between skin and electrical
                    source( non-invasive).​ ​<br>
                    This aspect of all electrical safety applies to macro-shock, which happens when current enters the
                    body through skin contact. ​<br>
                    However, dry skin on the outside of the body has a high resistance, which restricts current flow
                    through the body. In many medical procedures, such as ultrasound gel and surgical applicants, the
                    skin is moistened, which significantly reduces skin resistance. Additionally, medical electrical
                    (ME) equipment is frequently in direct and indirect physical contact with patients at all times,
                    such as with electrically powered beds and monitoring systems. Macro-shock results in ventricular
                    fibrillation at currents of about 100mA and loss of voluntary muscle control at currents as low as
                    10mA.​
                    </p>
                    <img src="img/102)slide 101 macroshock.png" class="w-full max-w-xl mx-auto my-4">
                </div>
                <div>
                    <p class="font-bold mb-4">MICROSHOCK</p>
                    An electric current following directly through the heart( invasive).​<br>

                    When invasive patient connections are placed directly across or near myocardial tissue, and blood
                    and nerve components have relatively low resistance, micro-shocks can result. As a result of the low
                    tissue impedance below the skin's surface and the current's focus at an invasive site, very low
                    levels of electrical current can cause ventricular fibrillation. Micro-electrocution, or death by
                    micro-shock, is a risk associated with both pacemakers and catheters. Micro-electrocution is thought
                    to be possible at currents greater than 20 microamps, according to numerous estimates. Patients in
                    healthcare settings are especially susceptible to the risks of microshock.​
                    </p>
                    <img src="img/103)slide 102 microshock.png" class="w-full max-w-xl mx-auto my-4">
                </div>
                <img src="img/103)slide 103.png" class="w-full max-w-xl mx-auto my-4">
                <div>
                    <h2 class="text-lg my-4">International Electrotechnical Commission (IEC)</h2>
                    <ul>
                        <li>IEC 60601, IEC 62353, and IEC 61010 are all international standards that are related to the
                            safety and performance of electrical equipment used in medical settings.</li>
                        <li><span class="font-bold">IEC 60601</span>: This is a series of standards that specify safety
                            and performance requirements
                            for medical electrical equipment. These standards cover a wide range of equipment, including
                            diagnostic imaging equipment, patient monitoring systems, surgical instruments, and dental
                            equipment. The standards are designed to ensure that the equipment is safe for use by
                            patients, healthcare professionals, and other individuals who may come into contact with the
                            equipment.​</li>

                        <li><span class="font-bold">IEC 62353</span>: This is a standard that specifies requirements
                            for the testing and maintenance of
                            medical electrical equipment. The standard provides guidance on how to test equipment for
                            electrical safety and performance, as well as how to maintain equipment to ensure that it
                            continues to function properly over time. The standard is intended to help healthcare
                            organizations ensure that their medical equipment is safe and reliable.​</li>

                        <li><span class="font-bold">IEC 61010</span>: This is a series of standards that specify safety
                            requirements for electrical
                            equipment used for measurement, control, and laboratory use. The standards cover a wide
                            range of equipment, including laboratory instruments, process control equipment, and test
                            and measurement equipment. The standards are designed to ensure that the equipment is safe
                            for use by individuals who may come into contact with the equipment, and that the equipment
                            does not pose a hazard to the environment.​</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg my-5">Input Protection Classification ​
                        ME Class- Means of Operator Protection (MOOP)​
                        ​</h2>
                    <ul>
                        <li><span class="font-bold">Class I</span>—Live part covered by basic insulation and protective
                            earth​​</li>
                    </ul>
                    <p>Equipment protection against electric shock by (earthed) additional protection to basic
                        insulation through means of connecting exposed conductive parts to the protective earth in the
                        fixed wiring of the installation.​
                    <ul class="list-inside list-disc">
                        <li>Protection of the insulation between live parts exposed conductive part.​</li>
                        <li>supplementary protection(i.e. the protective earth)have fuses at the equipment ends of the
                            mains
                            supply lead in both the live and neutral conductors​</li>
                        <li>3-prong power cord​</li>
                    </ul>
                    </p>
                    <div class="grid grid-cols-3 my-3">
                        <div class=" text-center "><img src="img/104)slide 106 protective earth.png"
                                class="mx-auto h-12">
                            <p>Protective
                                Earth</p>
                        </div>
                        <div class=" text-center "><img src="img/105)slide 106 functional earth.png"
                                class="mx-auto h-12">
                            <p>Functional
                                Earth​</p>
                        </div>
                        <div class=" text-center "><img src="img/106)slide 106 earth reference point.png"
                                class="mx-auto h-12">
                            <p>Earth ​reference ​ point​</p>
                        </div>
                    </div>
                    <ul>
                        <li><span class="font-bold">Class II</span>—Live part covered by double or reinforced
                            insulation​​</li>
                    </ul>
                    <p>Also referred to as double insulated. ​

                        Equipment protection against electric shock is achieved by additional protection to basic
                        insulation through means of supplementary insulation, there being no provision for the
                        connection of exposed metalwork of the equipment to a protective conductor and no reliance upon
                        precautions to be taken in the fixed wiring of the installation.​
                    <ul class="list-inside list-disc">
                        <li>Have fuses at the equipment end of the mains supply lead​​</li>
                        <li>2-prong power cord​​</li>
                    </ul>
                    </p>
                    <div class="grid grid-cols-3 my-3">
                        <div class=" text-center "><img src="img/107)slide 107 class II.png" class="mx-auto h-12">
                            <p>Class II​</p>
                        </div>

                    </div>
                    <ul>
                        <li><span class="font-bold">Class III/IP ( internal power)</span>—Internal power supply​​​</li>
                    </ul>
                    <p>
                    <ul class="list-inside list-disc">
                        <li>Protection relies on the fact that no voltage than safety extra low voltage (SELV) are
                            present​​​</li>
                        <li>SELV is defined in turn in the relevant standard as a voltage not exceeding 25V ac or 60V
                            dc.​​</li>
                        <li>Battery operated or SELV transformer.​​​</li>
                        <li>Not recognised for electrical safety requirement anymore.​​​</li>
                        <li>Limitation of voltage is not deemed sufficient to ensure safety of patient.​​​​</li>
                    </ul>
                    </p>
                </div>
                <div>
                    <h2 class="text-lg my-5">OUTPUT PROTECTION CLASSIFICATION​ Applied Parts-Means of Patient
                        Protection(MOPP)​​
                        ​</h2>
                    <ul>
                        <li><span class="font-bold">Type B(Body)</span>—Patient applied part earthed​​​</li>
                    </ul>
                    <p>
                    <ul class="list-inside list-disc">
                        <li>Non-invasive .Earth Referenced Hospital Bed​​</li>
                        <li>Type B applied part - Applied part complying with specified requirements
                            forprotectionagainst electric shock. Type B applied parts are those parts, which are usually
                            earth referenced. Type B are those parts not suitable for direct cardiac application.​​</li>
                    </ul>
                    </p>
                    <div class="grid grid-cols-3 my-3">
                        <div class=" text-center "><img src="img/108)slide 110 type B.png" class="mx-auto h-12">
                            <p>Type B applied part​</p>
                        </div>
                        <div class=" text-center "><img src="img/109) slide 110 type B applied part.png"
                                class="mx-auto h-12">
                            <p>Defibrillation proof type B ​

                                applied part​​</p>
                        </div>
                    </div>
                    <ul>
                        <li><span class="font-bold">Type BF(Body Floating)</span>—Patient applied part floating
                            (surface conductor)​
                        </li>
                    </ul>
                    <p>Non-invasive .Patient circuit floating type Defibrillator paddle, SPO2 probe.​
                    <ul class="list-inside list-disc">
                        <li>Type BF applied part - F-Type applied part complying with a higher degree of protection
                            against electric shock than type B applied parts. Type BF applied parts are those parts not
                            suitable for direct cardiac application.​​​</li>
                    </ul>
                    </p>
                    <div class="grid grid-cols-3 my-3">
                        <div class=" text-center "><img src="img/110) slide 111 type BF.png" class="mx-auto h-12">
                            <p>Type BF applied part​​</p>
                        </div>
                        <div class=" text-center "><img src="img/111)slide 111 type BF applied part.png"
                                class="mx-auto h-12">
                            <p>Defibrillation proof type BF applied part​​</p>
                        </div>

                    </div>
                    <ul>
                        <li><span class="font-bold">Type CF-Cardiac</span>—Patient applied part floating for use in
                            direct contact with the heart​​​​​</li>
                    </ul>
                    <p>
                    <ul class="list-inside list-disc">
                        <li>Patient circuit floating type ECG module, Infusion Device(CF)​​</li>
                        <li>Type CF applied part - F-Type applied part complying with the highest degree of protection
                            against electric shock. Type CF applied parts are those parts suitable for direct cardiac
                            application​​​</li>
                    </ul>
                    </p>
                    <div class="grid grid-cols-3 my-3">
                        <div class=" text-center "><img src="img/112)slide 112 type CF applied part.png"
                                class="mx-auto h-12">
                            <p>​​Type CF ​applied part​</p>
                        </div>
                        <div class=" text-center "><img src="img/113)slide 112 deffib CF applied part.png"
                                class="mx-auto h-12">
                            <p>Defibrillation proof type BF applied part​​</p>
                        </div>

                    </div>
                </div>
                <div>
                    <h2 class="text-lg mt-5 mb-4">The IEC 62353 specifies three different ​
                        methods for measuring the equipment leakage ​
                        current:</h2>
                    <div>
                        <h3 class="font-bold my-4">Direct method</h3>
                        <ul class="list-disc">
                            <li>The direct method is a method of measuring the electrical safety of
                                medical
                                devices by
                                applying a test voltage directly to the conductive parts of the device and measuring the
                                resulting leakage current. The method involves using test equipment with built-in
                                voltage
                                and current measurement capabilities to apply a test voltage to the device and measure
                                the
                                resulting leakage current. The test voltage and current are then compared to established
                                limits to determine whether the device meets the electrical safety requirements.​</li>
                            <li>The direct method is often preferred for testing medical devices because it provides
                                accurate
                                and reliable measurements of the electrical safety parameters, such as leakage current,
                                earth
                                resistance, and insulation resistance. The method is also relatively fast and
                                straightforward,
                                requiring minimal setup time and equipment.​</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold my-4">Alternative method​</h3>
                        <ul class="list-disc">
                            <li>The alternative method is one of the methods specified in the International
                                Electrotechnical Commission (IEC) 62353 standard for testing the electrical safety of
                                medical electrical equipment. This method is also known as the "substitute leakage
                                current" method.​​</li>
                            <li>The alternative method is used to measure the leakage current of medical electrical
                                equipment without directly applying a test voltage to the conductive parts of the
                                equipment. Instead, the method involves connecting a substitute impedance between the
                                conductive parts of the equipment and earth, and measuring the leakage current that
                                flows through the impedance.​​</li>
                            <li>To perform the alternative method, a substitute impedance is connected between the
                                conductive parts of the equipment and earth. This substitute impedance is designed to
                                simulate the electrical load that the equipment would normally present to the mains
                                supply. A test voltage is then applied to the substitute impedance, and the resulting
                                leakage current is measured using a current measuring device.​</li>
                            <li>The alternative method is often used for measuring the leakage current of medical
                                equipment because it is a reliable and accurate method that does not require direct
                                contact with the conductive parts of the equipment. The method is also relatively fast
                                and straightforward, requiring minimal setup time and equipment.​</li>

                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold my-4">Differential method​
                            ​​</h3>
                        <ul class="list-disc">
                            <li>The differential method is a method of measuring the electrical safety of medical
                                devices that is specified in the International Electrotechnical Commission (IEC) 62353
                                standard. This method is also known as the "two-point" method.​​​</li>
                            <li>The differential method involves measuring the voltage difference between two points on
                                the device under test, while a known current is applied between these two points. The
                                method is used to measure the insulation resistance of the device, which is an important
                                parameter in determining its electrical safety.​​​</li>
                            <li>To perform the differential method, two probes are placed on the device under test at
                                different points, and a known current is applied between these two points. The voltage
                                difference between the probes is then measured, and the insulation resistance is
                                calculated using Ohm's law. The calculated insulation resistance is then compared to
                                established limits to determine whether the device meets the electrical safety
                                requirements.​​</li>
                            <li>The differential method is often used for measuring the insulation resistance of medical
                                devices because it is a reliable and accurate method that provides a direct measurement
                                of the insulation resistance. The method is also relatively fast and straightforward,
                                requiring minimal setup time and equipment.​​</li>

                        </ul>
                    </div>
                </div>
                <h2 class="text-lg mb-4 mt-5">LEAKAGE CURRENT​</h2>
                <h3>IEC 60601 defines leakage current of three different sources:​</h3>
                <ul class="list-disc">
                    <li>Earth Leakage: current following down the protective Earth conductor of the mains inlet lead.
                    </li>
                    <li>Enclosure Leakage: current flowing the Earth through a person by touching the medical
                        equipment/system or part of. (Also called touch current).</li>
                    <li>Applied Part or Patient Leakage: current flowing through a person to Earth from the Applied Part
                        or current flowing from a person to Earth via the Applied Part by applying unintended voltage
                        from external sources.</li>
                </ul>
                <div class="card card-side flex-row-reverse bg-base-100 shadow-xl my-4">
                    <figure><img src="/img/114)slide 118 earth leakage current.png" alt="" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Earth Leakage Current</h2>
                        <ul class="list-disc">
                            <li>The Earth Leakage Test show the current flowing through or via the insulation of the
                                medical Device inti the protective Earth conductor.​</li>

                            <li>Valid for Class I equipment with Type B, BF and CF applied parts.</li>
                        </ul>

                    </div>
                </div>
                <div class="card card-side flex-row-reverse bg-base-100 shadow-xl my-4">
                    <figure><img src="/img/115)slide 119 enclosure leakage current.png" alt="" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Enclosure Leakage Current​</h2>
                        <ul class="list-disc">
                            <li>Enclosure Leakage dispalys the current that would flow is a person came inti contact
                                with the housing of the Medical Device.​</li>

                            <li>Valid for b oth Class I and II equuoment with Tyoe B, BF, and CF Applied Part.​</li>
                        </ul>

                    </div>
                </div>
                <div class="card card-side flex-row-reverse bg-base-100 shadow-xl my-4">
                    <figure><img src="/img/116)slide 120 patient leakage type F.png" alt="" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Patient Leakage F-type​</h2>
                        <ul class="list-disc">
                            <li>The Patient Leakage F-Type Test (also known as mains on Applied Parts test) display the
                                current that would flow if a mains potential was applied to the Applied Part which was
                                attached to a patient.​</li>

                            <li>This test is applied only to type BF and CF equipment (class I and II).​​</li>
                            <li>CF: measured from each Applied Part separately which BF measured with all Applied Parts
                                connected together​​</li>
                        </ul>

                    </div>
                </div>
                <div class="card card-side flex-row-reverse bg-base-100 shadow-xl my-4">
                    <figure><img src="/img/117)slide 121 pt leakage current.png" alt="" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Patient Leakage Current​</h2>
                        <ul class="list-disc">
                            <li>The Patient Leakage Current is the current flowing from the Applied Part via the patient
                                to Earth or flowing from the patient via an Applied Part to Earth.​​</li>

                            <li>valid for both Class I and II equipment with Type B, BF and CF applied.​​​</li>
                            <li>CF: measured from each Applied Part separately while B and BF measured with all Applied
                                Part connected together.​​</li>
                        </ul>

                    </div>
                </div>
                <div class="card card-side flex-row-reverse bg-base-100 shadow-xl my-4">
                    <figure><img src="/img/118)slide 122 pt auxilary current.png" alt="" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Patient Auxiliary Current​
                        </h2>
                        <ul class="list-disc">
                            <li>The Patient Auxiliary Current display the leakage current that would flow between
                                applied Parts under normal and fault conditions.​​​</li>

                            <li>Measured between a single part of the Applied Part and all the other Applied Parts
                                connected together.This test should be repeated until all combinations have been
                                tested.​​​​</li>
                            <li>Valid for both Class I and II equipment with Types B,BF and CF applied.​​​</li>
                            <li>CF: measured from each Applied Part separately while BF measured with all Applied Parts
                                connected together.​​​​</li>
                        </ul>

                    </div>
                </div>

                <h2 class="text-lg mb-4 mt-5">Rigel 288+ Electrical Safety Test(EST)​​</h2>
                <div class="items-center flex">
                    <img src="img/119)Rigel EST.png" class="w-1/3">
                    <ul class="list-disc">
                        <li>An electrical safety analyzer is a specialized test instrument used to measure the
                            electrical
                            safety of medical electrical equipment. It is designed to perform a variety of electrical
                            safety
                            tests, including insulation resistance, ground resistance, leakage current, and patient
                            leakage
                            current.​</li>
                        <li>Electrical safety analyzers typically include a variety of test functions and measurement
                            capabilities, and may be capable of performing both manual and automated tests. They are
                            used by
                            biomedical engineering technicians and other professionals to test and verify the safety of
                            medical electrical equipment in accordance with relevant safety standards and regulations.​
                        </li>
                    </ul>
                </div>
                <a href="/files/RIGEL 288+ EST USER MANUAL -123-.pdf" class="link"><small>For more information and
                        details ,click
                        this file</small></a>
                <div class="flex">
                    <img src="img/120) slide124 rigel panel.png" class="mx-auto  w-2/3">
                    <img src="img/122)slide 124 gambal rigel est 1.png" class="mx-auto w-1/3">
                </div>
                <div class="flex">
                    <img src="img/121)slide 124 rigel panel 2.png" class="mx-auto w-2/3">
                    <img src="img/123)slide 124 gambar rigel set 2.png" class="mx-auto w-1/3">
                </div>

                <div class="mt-5">
                    <h2 class="text-lg">Prepare the EST for Ultrasound SonoAce R7 setup​</h2>
                    <div class="flex my-4">
                        <img src="img/124)slide 125 setup est 1.png" class="w-1/3">
                        <img src="img/125)slide 125 setup est 2.png" class="w-2/3">
                    </div>
                    <ol class="list-decimal">
                        <li>Set up the ultrasound machine SonoAce R7 with the Electrical Safety Test Rigel 288+​</li>
                        <li>Plug in and switch on the main power plug of EST​​</li>
                        <li>Connect the main plug of ultrasound SonoAce R7 to the DUT socket.​​</li>
                        <li>Connect apply part adaptor box to the patient applied part adaptor connection box.​​</li>
                    </ol>
                    <div class="flex my-4">
                        <img src="img/126)slide 126 setup est 3.png" class="w-1/2">
                        <img src="img/127)slide 126 setup est 4.png" class="w-1/2">
                    </div>
                    <ol class="list-decimal" start="5">
                        <li>Connect the earth bond probe socket form the EST to the grounding part of the device under
                            test(DUT).​​</li>
                        <li>Connect one wire from applied part adapter box and clip to the applied part of the device
                            under test( DUT)make sure to wrap the applied part with aluminium foil. ​​​</li>
                    </ol>
                    <div class="flex my-4">
                        <img src="img/128)slide 127 setup est 5.png" class="w-1/3">
                        <img src="img/129)slide 127 setup est 6.png" class="w-2/3">
                    </div>
                    <ol class="list-decimal" start="7">
                        <li>Fill in the asset details and choose the right IEC, Class of machine and Method of measuring
                            electrical safety.​</li>
                        <li>Press F4 and run the test .​​</li>
                    </ol>
                    <p class="text-gray-600">
                        NOTES:IEC 60601- General requirements for safety (1977) and can use for Testing and Commisioning
                        (T&C)​
                        IEC 62353- Recurrent test and test after repair, ( Plan Preventive Maintenance and Breakdown)​
                        IEC 61010-Measurement, control and laboratory.​
                        ​
                        Class I of Device Under Test(DUT) Ultrasound Machine.​
                        Select Direct Method as the direct method is a method of measuring electrical safety on medical
                        devices that involves placing probes directly on the conductive parts of the device to measure
                        the electrical parameters, such as leakage current or earth resistance.​

                    </p>
                </div>
                <div>
                    <h2 class="text-lg mb-4 mt-5">Electrical ​ Safety Test ​ Result</h2>
                    <p class="text-gray-600">
                        Note:According to the International Electrotechnical Commission's (IEC) standard for electrical
                        safety testing (IEC 62353), the earth resistance of medical electrical equipment should not
                        exceed 0.3 ohm. This is because a high earth resistance can result in a potential difference
                        between the equipment and the ground, which can lead to electric shock or other hazardous
                        conditions. A low earth resistance ensures that any fault currents are effectively grounded,
                        minimizing the risk of electrical hazards and ensuring the safety of the equipment and
                        personnel.​
                    </p>
                    <!-- Slider main container -->
                    <div class="swiper my-5">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/130)slide 129 EST result 1.png">
                            </div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/131)slide 129 EST result 2.png">
                            </div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/132)slide 129 EST result 3.png"></div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/133)slide 129 EST result 4.png"></div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/134)slide129 EST result 5.png"></div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/135)slide 129 EST result 6.png"></div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/136)slide 129 EST result 7.png"></div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/137)slide129 EST result 8.png"></div>
                            <div class="swiper-slide "><img class="w-3/4 mx-auto"
                                    src="/img/138)slide 129 EST result 9.png"></div>
                            ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>

                    <div>
                        <h2 class="text-lg mb-4 mt-5">POTENTIAL HAZARD</h2>
                        <ol class="list-decimal">
                            <li>Patient/user infection due to contaminated equipment.</li>
                            <li>Electrical micro shock to patient.</li>
                            <li>Patient injury or tissue damage from ultrasound radiation.</li>
                            <li>Risk of explosion if used in the presence of flammable anesthetic.</li>
                            <li>Patient/user injury or adverse reaction from fire or smoke.</li>
                        </ol>
                    </div>

            </section>
            <section class="p-10" id="safety">
                <h1 class="uppercase text-3xl mb-5 text-primary">SAFETY AND SYMBOL​</h1>
                <p>The International Electro Technical Commission (IEC) has established a set of symbols for medical
                    electronic ​

                    equipment, which classify a connection or warn of potential hazards. The classifications and symbols
                    are ​

                    shown below.</p>
                <img src="img/139)slide 131 safety and symbol 1.png" class="w-full max-w-xl mx-auto">
                <img src="img/140)slide 131 safety and symbol 2.png" class="w-full max-w-xl mx-auto">
                <p class="my-4">Labels​<br>To protect the system, you may see ‘Warning’ or ‘Caution’ marked on the
                    surface of the product.​</p>
                <img src="img/141)slide 132 label and warning 1.png" class="w-full max-w-xl mx-auto">
                <img src="img/142)slide 132 symbol manufacture.png" class="w-full max-w-xl mx-auto">
                <img src="img/143)slide 132 label and warning 2.png" class="w-full max-w-xl mx-auto">
                <img src="img/144)slide 133 label and warning 3.png" class="w-full max-w-xl mx-auto mt-4">
                <p class="text-center mb-4">Safety note for “TIP-OVER” Precaution​</p>
                <img src="img/145) slide 133 label and warning 4.png" class="w-full max-w-[8rem] mx-auto">
                <p class="text-center"> Prohibition of seating on Control panel​</p>

                <div class="my-5">
                    <h2 class="text-lg mb-4">Safety precautions in operating equipment</h2>
                    <p class="mb-3">Before turning ON the power, perform the following checks:</p>
                    <ol class="list-decimal">
                        <li>The temperature, humidity, and atmospheric pressure should meet the conditions of use.</li>
                        <li>There should be no condensation.</li>
                        <li>There should be no deformation, damage, or stains to the system and peripheral units.</li>
                        <li>There should be no backlash or loose screws in the casters, monitor, panel, etc.</li>
                        <li>Caster locks should function correctly.</li>
                        <li>There should be no damage to cables and no looseness in the connectors.</li>
                        <li>There should be no abnormalities or stains on the transducer surface, cable sheath, or
                            connector.</li>
                        <li>No clips, etc. are placed on the main panel or keyboard.</li>
                        <li>There should be no obstacles near the movable sections and air filter of the system.</li>
                    </ol>
                    <p class="my-4">After turning ON the power,​</p>
                    <ol class="list-decimal">
                        <li>There should be no abnormal sound, unusual smells, or overheating.</li>
                        <li>No error message is displayed.</li>
                        <li>There should be no obviously abnormal noise, discontinuous display, or dark areas.</li>
                        <li>The acoustic lens surface of the transducer should not be unusually hot.</li>
                        <li>Switches and knobs on the panel should function normally.</li>
                    </ol>
                </div>
                <div class="my-5">
                    <h2 class="text-lg mb-4">ELECTRICAL SAFETY ​</h2>
                    <p>This equipment has been verified as a Class I device with Type BF applied parts. ​</p>

                    <p class="my-3 text-error"><strong class="my-3 text-error">CAUTION:</strong> ​</p>
                    <ul class="list-disc">
                        <li>As for US requirement, the LEAKAGE CURRENT might be measured from a center-tapped circuit
                            when the
                            equipment connects in the United States to 240V supply system.​</li>

                        <li>To help assure grounding reliability, connect to a “hospital grade” or “hospital only”
                            grounded
                            power outlet.​</li>
                        <li>Prevention of Electric Shock​</li>


                        In a hospital, dangerous currents are due to the potential differences between connected
                        equipment and touchable conducting parts found in medical rooms. The solution to the problem
                        is consistent equipotential bonding. Medical equipment is connected with connecting leads
                        made up of angled sockets to the equipotential bonding network in medical rooms.​
                    </ul>
                    <img src="img/146)slide 135 electrical safety 1.png" class="w-full max-w-xl mx-auto">
                    <p class="my-3 text-error"><strong>WARNING: </strong></p>
                    <ul>
                        <li>Electric shock may exist if this system, including all of its externally mounted recording
                            and monitoring devices, is not properly grounded.</li>
                        <li>Do not remove the covers on the system; hazardous voltages are present inside. Cabinet
                            panels must be in place while the system is in use. All internal adjustments and
                            replacements must be made by a qualified Samsung Medison Customer Service Department.</li>
                        <li>Check the face, housing, and cable before use. Do not use and disconnect the power source if
                            the face is cracked, chipped, or torn, the housing is damaged, or if the cable is abraded.
                        </li>
                        <li>Always disconnect the system from the wall outlet prior to cleaning the system.</li>
                        <li>All patient contact devices, such as probes and ECG leads, must be removed from the patient
                            prior to the application of a high voltage defibrillation pulse.</li>
                        <li>The use of flammable anesthetic gas or oxidizing gases (N2O) should be avoided.</li>
                        <li>Avoid places where the system is likely to be difficult to operate the disconnection device.
                        </li>
                        <li>Do not use HF surgical equipment with the system. Any malfunctions in the HF surgical
                            equipment may result in burns to the patient.</li>
                    </ul>
                    <p class="my-3 text-error"><strong>CAUTION: </strong></p>
                    <ul>
                        <li>The system has been designed for 100-120VAC and 200-240VAC; you should select the input
                            voltage of the printer and VCR. Prior to connecting a peripheral power cord, verify that the
                            voltage indicated on the power cord matches the voltage rating of the peripheral device.
                        </li>
                        <li>An isolation transformer protects the system from power surges. The isolation transformer
                            continues to operate when the system is in standby.</li>
                        <li>Do not immerse the cable in liquids. Cables are not waterproof.</li>
                        <li>The auxiliary socket outlets installed on this system are rated 100-120V and 200-240V with a
                            maximum total load of 200W. Use these outlets only for supplying power to equipment that is
                            intended to be part of the ultrasound system. Do not connect additional multiple-socket
                            outlets or extension cords to the system.</li>
                        <li>Do not connect peripheral devices not listed in this manual to the auxiliary socket outlets
                            of the system.</li>
                        <li>Do not touch SIP/SOP and the patient simultaneously. There is a risk of electric shock from
                            leakage current.</li>
                    </ul>
                </div>
                <div class="my-5">
                    <h2 class="text-lg">MECHANICAL SAFETY​</h2>
                    <h3 class="mb-4">Moving the Equipment​<h3>
                            <p>Before transporting the product, check that the brakes on the front, back wheels or
                                wheels are
                                unlocked.</p>

                            <p>Also, make sure to retract the monitor arm completely so that it is secured in a
                                stationary
                                position.</p>

                            <p>Always use the handles at the console and move the product slowly.</p>

                            <p>This product is designed to resist shocks. However, excessive shock, for example if the
                                product
                                falls over, may cause serious damage.</p>

                            <p class="my-4"><strong>The Brakes</strong></p>

                            <p>Brakes are mounted on the front and back wheels of the console only. To lock the brakes,
                                press
                                the area under the locks with your foot. To unlock the brakes, press the Off area on the
                                locks
                                with your foot.</p>

                            <p>You can use the brakes to control the movement of the product. It is recommended that you
                                lock
                                the brakes when using the product.</p>


                            <p class="my-4"><strong> Precautions on Ramps​</strong></p>

                            <p>Always make sure that the control panel is facing the direction of movement.​</p>
                            <p>When moving the product down a ramp or resting it temporarily on a ramp, the product may
                                tilt over ​even with the brakes on depending on the direction of the product. Do not
                                rest the product
                                on ramps.</p>

                            <p>Safety Note​</p>

                            <p class="my-3 text-error"><strong>CAUTION: </strong></p>
                            <ul class="list-disc">
                                <li>Do not press the control panel excessively.</li>
                                <li>Never attempt to modify the product in any way.</li>
                                <li>Check the operational safety when using the product after a prolonged break in
                                    service.</li>
                                <li>Make sure that other objects, such as metal pieces, do not enter the system.</li>
                                <li>Do not block the ventilation slots.</li>
                                <li>To prevent damage to the power cord, be sure to grip the plug head – not the cord –
                                    when unplugging.</li>
                                <li>Excessive bending or twisting of cables on patient-applied parts may cause failure
                                    or intermittent operation of the system.</li>
                                <li>Improper cleaning or sterilization of a patient-applied part may cause permanent
                                    damage.</li>
                                <li>Repair or replacement of parts of this equipment must be performed by a qualified
                                    Samsung Medison service technician. Assuming that the equipment is maintained by a
                                    qualified service technician and meets the guidelines of this provided manual, the
                                    expected service life of the equipment is <span
                                        class="text-primary-focus font-bold">approximately 7 years.</span></li>
                            </ul>

                            <p class="my-3">Safety Note for Monitor​</p>

                            <p>When adjusting the height or position of the monitor, be careful of the space in the
                                middle of the monitor arm. Having your fingers or other body parts caught in it may
                                result in injury</p>

                            <img src="img/148)slide 139 monitor.png" class="w-full max-w-xl mx-auto">
                            <h2 class="text-lg mb-4">Biological Safety​​</h2>
                            <p class="my-3 text-error"><strong>WARNING: </strong></p>
                            <ul>
                                <li>Ultrasound waves may have damaging effects on cells and, therefore, may be
                                    harmful to the patient. If there is no medical benefit, minimize the
                                    exposure time and maintain the ultrasound wave output level at low. Please
                                    refer to the ALARA principle. </li>
                                <li>Do not use the system if an error message appears on the video display
                                    indicating that a hazardous condition exists. Note the error code, turn off
                                    the power to the system, and call your local Samsung Medison Customer
                                    Service Department.​</li>
                                <li>Do not use a system that exhibits erratic or inconsistent updating.
                                    Discontinuities in the scanning sequence are indicative of a hardware
                                    failure that should be corrected before use.​
                                </li>
                                <li>The system limits the maximum contact temperature to 43 degree Celsius, and
                                    the ultrasonic waves output observes American FDA regulations.​</li>
                            </ul>
                            <p class="my-4"><strong> ALARA Principle</strong></p>

                            <p>The "as low as reasonably achievable" (ALARA) principle of diagnostic ultrasound
                                is defined by the judgment and insight of qualified personnel. It is the
                                sonographer's responsibility to control the total energy transmitted into the
                                patient and to reconcile exposure time with diagnostic image quality. The
                                ability of the user to abide by the ALARA principle is important, as advances in
                                diagnostic ultrasound have resulted in the need for more and better information
                                to guide the user. There are a number of variables that affect the way in which
                                the output display indices can be used to implement the principle, such as mass,
                                body size, location of the bone relative to the focal point, attenuation in the
                                body, and ultrasound exposure time. Exposure time is an especially useful
                                variable because the user controls it.​</p>


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
                {{-- // pagination: {
                //     el: '.swiper-pagination',
                // }, --}}

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
                rootMargin: "-200px 0px -200px 0px",
                threshold: 0,
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        </script>
    @endpush

</x-app-layout>
