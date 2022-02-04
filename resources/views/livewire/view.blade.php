<div>

         <div class="min-h-full bg-gray-100"
         x-data="{
            mobileSide: false,
        }">
            @include('layouts.navigation')
            <div class="py-1  bg-white border-x-2 border-gray-200 mx-auto" style="max-width: 1366px;"></div>
            <div class="w-full h-full m-auto border-2 border-t-0 border-gray-200 pr-4 bg-white" style="max-width: 1366px;">

                    <div class="flex pb-12">
                        @include('layouts.sidebar')
                        <x-modal class="bg-violet-500" x-show="mobileSide">
                          test
                        </x-modal>
                        <div class="h-1/6 flex flex-col w-full">
                            <div class="flex inline-flex border-b border-gray-200 mr-10">
                                <span class="w-2.5 h-5 py-10  bg-no-repeat bg-cover" style="background-image: url(../svg/ArrowBack.SVG); background-size:100% 100%"></span>
                                <span class="text-4xl pb-3 pt-5 pl-5 font-extrabold lato__heavy">Title goes here</span>
                            </div>

                            <div class="h-1/6 flex flex-row w-full space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Ins.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Inv.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pro.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Sub.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pur.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pla.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Per.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                            </div>  

                            <div class="h-1/6 flex flex-row w-full space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Aia.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Acc.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cd5.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Contracts.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dob.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dra.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/W9.SVG); background-size:100% 100%"></span>
                            </div>
                            
                            <div class="h-1/6 flex flex-row w-full mt-36 space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Shield.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dollar.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/BulletText.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Sub.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pur.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Plans3.PNG); background-size:106% 106%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                            </div>  

                            <div class="h-1/6 flex flex-row w-full space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Aia.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Calc.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cd5.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Contracts.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dob.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pen.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/W9.SVG); background-size:100% 100%"></span>
                            </div>

                        </div>
                        
                    </div>

            </div>
        </div>
    </body><body x-data="{
        mobileSide: false,
    }">
         <div class="min-h-full bg-gray-100">
            @include('layouts.navigation')
            <div class="py-1  bg-white border-x-2 border-gray-200 mx-auto" style="max-width: 1366px;"></div>
            <div class="w-full h-full m-auto border-2 border-t-0 border-gray-200 pr-4 bg-white" style="max-width: 1366px;">

                    <div class="flex pb-12">
                        @include('layouts.sidebar')
                        <x-modal class="bg-violet-500" x-show="mobileSide">
                          test
                        </x-modal>
                        <div class="h-1/6 flex flex-col w-full">
                            <div class="flex inline-flex border-b border-gray-200 mr-10">
                                <span class="w-2.5 h-5 py-10  bg-no-repeat bg-cover" style="background-image: url(../svg/ArrowBack.SVG); background-size:100% 100%"></span>
                                <span class="text-4xl pb-3 pt-5 pl-5 font-extrabold lato__heavy">Title goes here</span>
                            </div>

                            <div class="h-1/6 flex flex-row w-full space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Ins.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Inv.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pro.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Sub.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pur.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pla.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Per.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                            </div>  

                            <div class="h-1/6 flex flex-row w-full space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Aia.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Acc.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cd5.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Contracts.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dob.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dra.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/W9.SVG); background-size:100% 100%"></span>
                            </div>
                            
                            <div class="h-1/6 flex flex-row w-full mt-36 space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Shield.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dollar.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/BulletText.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Sub.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pur.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Plans3.PNG); background-size:106% 106%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cap.SVG); background-size:100% 100%"></span>
                            </div>  

                            <div class="h-1/6 flex flex-row w-full space-x-12 space-y-12">
                                <span class="py-6 mt-12 ml-12 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Aia.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Calc.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Cd5.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Contracts.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Dob.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/Pen.SVG); background-size:100% 100%"></span>
                                <span class="py-6 px-7 bg-no-repeat bg-cover" style="background-image: url(../svg/W9.SVG); background-size:100% 100%"></span>
                            </div>

                        </div>
                        
                    </div>

        </div>
    </div>
</div>
