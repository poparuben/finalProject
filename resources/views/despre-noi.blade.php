<x-head />

<body>

    <!-- NAVBAR -->
    <x-navbar />
    <!-- HEADER -->
    <div class="headerSection">
        <h1>@lang('public.DespreNoi')</h1>
    </div>

    <div class="pageContainer">
        <div class="titleSection titleAboutUs">
            <h2>@lang('public.MisiuneaNoastra')</h2>
            <p>@lang('public.NOASTRA')</p>
        </div>
        <div class="twoFlexBoxes">
            <div class="col1">
                <p>@lang('public.MisiuneaNoastraText1')</p>
            </div>
            <div class="col2">
                <p>@lang('public.MisiuneaNoastraText2')</p>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="teamSectionCont">
        <h1>@lang('public.EchipaNoastra')</h1>
        <div class="teamSection">
            <div class="col">
                <img src="./img/member1.jpg" alt="">
                <p>Ionel Marin</p>
            </div>
            <div class="col">
                <img src="./img/old2.jpg" alt="">
                <p>Ionel Marin</p>
            </div>
            <div class="col">
                <img src="./img/od3.jpeg" alt="">
                <p>Limbasan David</p>
            </div>
            <div class="col">
                <img src="./img/member1.jpg" alt="">
                <p>Ioan Pasods</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <x-footer-default />
</body>

</html>
