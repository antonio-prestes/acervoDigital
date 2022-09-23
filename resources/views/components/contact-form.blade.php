<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 mx-40">
        <div class="flex flex-wrap">
            <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                <h2 class="text-3xl font-bold mb-6">Contact us</h2>
                <p class="text-gray-500 mb-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Laudantium, modi accusantium ipsum corporis quia asperiores
                    dolorem nisi corrupti eveniet dolores ad maiores repellendus enim
                    autem omnis fugiat perspiciatis? Ad, veritatis.
                </p>
                <p class="text-gray-500 mb-2">New York, 94126, United States</p>
                <p class="text-gray-500 mb-2">+ 01 234 567 89</p>
                <p class="text-gray-500 mb-2">info@gmail.com</p>
            </div>
            <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                <form method="POST" action="{{ route('contact.create') }}">
                    @csrf
                    <div class="form-group mb-6">
                        <input type="text" class="form-control block w-full px-3 py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                               placeholder="Name" name="name">
                    </div>
                    <div class="form-group mb-6">
                        <input type="email" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                               placeholder="Email address" name="email">
                    </div>
                    <div class="form-group mb-6">
            <textarea class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            " id="exampleFormControlTextarea13" rows="3" placeholder="Message" name="message"></textarea>
                    </div>
                    <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-indigo-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-indigo-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Send</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

