<x-app-layout>
<style>

.background {
position : absolute ;
display:block;
top: 0;
left: 0;
z-index: -1;
}
</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 grid">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div
                class="flex w-full grid-flow-row md:grid-cols-12 items-center gap-4 overflow-y-hidden overflow-x-scroll px-10 pt-1 pb-10 xl:grid xl:overflow-x-auto xl:px-4">
                <div class="card col-span-3 row-span-3 w-full shadow-xl bg-neutral text-neutral-content" data-aos="fade-up" >
                    {{-- <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure> --}}
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
                            <a href="/introduction" class="btn btn-secondary btn-block ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full shadow-xl bg-neutral text-neutral-content" data-aos="fade-up"  data-aos-delay="200">

                    {{-- <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure> --}}
                    <div class="card-body">
                        <h2 class="card-title">Ultrasound Machine SonoAce R7</h2>
                        <ul>
                            <li>Block Diagram​​</li>
                            <li>Phantom​</li>
                            <li>Probe</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <a href="/sonoace-r7" class="btn btn-secondary btn-block ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full shadow-xl bg-neutral text-neutral-content" data-aos="fade-up"  data-aos-delay="400">
                    {{-- <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure> --}}
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
                            <a href="/simulation" class="btn btn-secondary btn-block ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full shadow-xl bg-neutral text-neutral-content" data-aos="fade-up"  data-aos-delay="600">
                    {{-- <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure> --}}
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
                            <a href="/technical-part" class="btn btn-secondary btn-block ">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="card col-span-3 row-span-3 w-full shadow-xl bg-neutral text-neutral-content" data-aos="fade-up"  data-aos-delay="800">
                    {{-- <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure> --}}
                    <div class="card-body">
                        <h2 class="card-title">Assessment</h2>
                        <ul>
                            <li>QUIZES​</li>

                            <li>EXERCISES</li>

                        </ul>
                        <div class="card-actions justify-end">
                            <a href="/introduction" class="btn btn-secondary btn-block ">Learn more</a>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>

<canvas class=
"background"
></canvas>
 @push('scripts')
<script>

window.onload = function() {
  Particles.init({
    selector:'.background',
    color: ['#48BCD1'],
  connectParticles: true,

// options for breakpoints
  responsive: [ {
      breakpoint: 768,
      options: {
        maxParticles:200,
        color:'#48F2E3',
        connectParticles:false
      }
    }, {
      breakpoint:425,
      options: {
        maxParticles:100,
        connectParticles:true
      }
    }, {
      breakpoint:320,
      options: {
        maxParticles:0
// disables particles.js
      }
    }
  ]
  });
};
</script>
@endpush
</x-app-layout>
