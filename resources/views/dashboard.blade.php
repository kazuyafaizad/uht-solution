<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 grid">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div
                class="flex w-full grid-flow-row md:grid-cols-12 items-center gap-4 overflow-y-hidden overflow-x-scroll px-10 pt-1 pb-10 xl:grid xl:overflow-x-auto xl:px-4">
                <div class="card col-span-3 row-span-3 w-full bg-base-100 shadow-xl">
                    <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Introduction</h2>
                        <ul>
                            <li>General information​</li>

                            <li>Overview Ultrasound Machine​</li>

                            <li>Ultrasound Configuration​</li>

                            <li>List of Service Buttons​</li>

                            <li>Diagnosis Mode= Basic Mode​</li>

                            <li>Multi-image Mode​</li>

                            <li>3D/3D Mode</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a href="/introduction" class="btn btn-accent btn-sm ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full bg-base-100 shadow-xl">
                    <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Ultrasound Machine SonoAce R7</h2>
                        <ul>
                            <li>Block Diagram​​</li>
                            <li>Phantom​</li>
                            <li>Probe</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a href="/sonoace-r7" class="btn btn-accent btn-sm ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full bg-base-100 shadow-xl">
                    <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Simulation</h2>
                        <ul>
                            <li>1.How to use ultrasound SonoAce R7 ​​</li>

                            <li>2. How to use ultrasound to scan kidney.​​</li>

                            <li>3. How to improve ultrasound to scan liver, gallbladder and aorta.​​
                            </li>

                            <li>4. How to use ultrasound to scan bladder.​​</li>

                            <li>5.How to use ultrasound to get 3D/4D dimension images.​</li>

                        </ul>
                        <div class="card-actions justify-end">
                            <a href="/simulation" class="btn btn-accent btn-sm ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full bg-base-100 shadow-xl">
                    <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Technical Part</h2>
                        <ul>
                            <li>Troubleshooting​</li>

                            <li>Maintenance=User maintenance(Fuse replacement & cleaning the air filter​

                                = Routine maintenance inspection.​</li>

                            <li>PPM(Plan Preventive Maintenance) with Electrical Safety Test(EST) ​</li>

                            <li>Safety</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a href="/introduction" class="btn btn-accent btn-sm ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full bg-base-100 shadow-xl">
                    <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Assessment</h2>
                        <ul>
                            <li>QUIZES​</li>

                            <li>EXERCISES</li>

                        </ul>
                        <div class="card-actions justify-end">
                            <a href="/introduction" class="btn btn-accent btn-sm ">Learn more</a>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>
</x-app-layout>
