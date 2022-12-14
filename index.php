<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<main style="min-height: calc(100vh - 176px - 104px);">
    <!-- Background image -->
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
        background-position: 50%;
        background-image: url('https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?cs=srgb&dl=pexels-pixabay-40568.jpg&fm=jpg');
        height: 350px;
      ">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="flex justify-center items-center h-full">
                <div class="text-center text-white px-6 md:px-12 w-7/12">
                    <h1 class="text-5xl font-bold mt-0 mb-6">Welcome!</h1>
                    <h3 class="text-3xl font-semibold mb-8">We are happy to assist you for your medical needs. Create an
                        account to look up your appointments, access medical records, and much more! </h3>

                    <button type="button"
                        class="inline-block px-6 py-2.5 text-white bg-slate-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                        Get started
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

    <h1 class="font-semibold leading-tight text-5xl mt-0 mb-2 text-grey-600 bold text-left mt-10 ml-5">How can we help
        you today?</h1>

    <div class="flex justify-center mb-10 space-x-20 mt-10 text-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-5">Find Doctors and Locations</h5>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/000/572/974/small/vector61-224-01.jpg"
                class="mx-auto w-32 mb-5" />
            <p class="text-gray-700 text-base mb-4" style="line-height: 1.5em; height: 3em; overflow: hidden;">
                Find doctors based on city.
            </p>
            <button type="button" onclick="window.location.href ='./doc-and-locations.php'"
                class=" inline-block px-6 py-2.5 bg-slate-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">></button>
        </div>

        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-5">Add a Family Member</h5>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/000/376/259/small/Basic_Elements__28121_29.jpg"
                class="mx-auto w-32 mb-5" />
            <p class="text-gray-700 text-base mb-4" style="line-height: 1.5em; height: 3em; overflow: hidden;">
                Add a family member as a patient.
            </p>
            <button type="button" onclick="window.location.href ='./family-member.php'"
                class=" inline-block px-6 py-2.5 bg-slate-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">></button>
        </div>

        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-5">Prescriptions</h5>
            <img src="https://static.thenounproject.com/png/3701609-200.png" class="mx-auto w-32 mb-5" />
            <p class="text-gray-700 text-base mb-4" style="line-height: 1.5em; height: 3em; overflow: hidden;">
                View prescription information prescribed by your doctor.
            </p>
            <button type="button" onclick="window.location.href ='./prescriptions.php'"
                class=" inline-block px-6 py-2.5 bg-slate-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">></button>
        </div>

        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-5">Appointments</h5>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/001/511/501/small/medical-appointment-icon-free-vector.jpg"
                class="mx-auto w-32 mb-5" />
            <p class="text-gray-700 text-base mb-4" style="line-height: 1.5em; height: 3em; overflow: hidden;">
                Look up your appointment information.
            </p>
            <button type="button" onclick="window.location.href ='./appointments.php'"
                class=" inline-block px-6 py-2.5 bg-slate-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">></button>
        </div>

        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-5">Medical Records</h5>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/007/243/929/small/medical-records-icon-style-vector.jpg"
                class="mx-auto w-32 mb-5" />
            <p class="text-gray-700 text-base mb-4" style="line-height: 1.5em; height: 3em; overflow: hidden;">
                Look up your medical records.
            </p>
            <button type="button" onclick="window.location.href ='./medical-records.php'"
                class=" inline-block px-6 py-2.5 bg-slate-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">></button>
        </div>

    </div>
</main>



<?php include('footer.php'); ?>

</html>