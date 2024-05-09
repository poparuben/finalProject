<x-head />

<body>

    <!-- NAVBAR -->
    <x-navbar />

    <!-- HEADER -->
    <div class="headerSection">
        <h1>@lang('public.Contact')</h1>
    </div>
    <div class="divider"></div>
    <div class="container ">
        <div class="row gy-3">
            <div class="col-sm-4 border-right text-center">
                <span class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                    </svg></span>
                <p>popaodfaiok@gmail.com</p>
            </div>
            <div class="col-sm-4 text-center">
                <span class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg></span>
                <p>0751651651</p>
            </div>
            <div class="col-sm-4 border-left text-center">
                <span class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M1 11.105l4.708-2.897L1 5.383z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg></span>
                <p>asjndkjnasdnjjakjsnkj</p>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.6488757327943!2d24.135226676122954!3d45.778226671080844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c678604b4ad13%3A0xe744074070b2b902!2sGSD%20Software%20%26%20Technology!5e0!3m2!1sen!2sro!4v1706826728508!5m2!1sen!2sro"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="pageContainer contactSection">
        <form action="{{ route('addMessage.controller') }}" method="POST">
            @csrf
            @include('components.success-message')

            <h1>@lang('public.RequestHelp')</h1>
            <p>@lang('public.OurGoal')</p>
            <div class="form-group nameSection">

                <input name="name" id="name-input-field" class="form-control" type="text"
                    placeholder="@lang('public.Name')">
                @error('name')
                    <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
                @enderror

                <input name="second-name" id="name2-input-field" class="form-control" type="text"
                    placeholder="@lang('public.Surname')">
                @error('second-name')
                    <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">

                <input name="mail" id="email-input-field" class="form-control" placeholder="@lang('public.Email')">
                @error('mail')
                    <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="text-content" id="m-input-field" class="form-control" cols="30" rows="10"
                    placeholder="@lang('public.Message')"></textarea>
                @error('text-content')
                    <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
                @enderror
            </div>
            <button id="send-contact-form-btn" class="btn btn-primary defaultBtn" type="submit">@lang('public.Send')</button>
        </form>

    </div>

    <div class="divider"></div>



    <!-- FOOTER -->
    <x-footer-default />
</body>

</html>
