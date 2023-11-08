<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LotPlant</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
</head>

<body>
    <div class="container">
        <nav>
            @include('components/header')
        </nav>

        <section class="catalogue">
            <div class="catalogue_title">
                <h1>Комнатные растения на любой вкус</h1>
            </div> 
            <a href="catalogue"><button class="catalogue_button">В каталог</button></a>
        </section>
        <section class="novelty">
            <h1 class="novelty_title">Новинки</h1>
            <div class="plants_div">
            @include('components/plants')
            </div>
        </section>
        <section class="info">
            <div class="info_div">
                <h1>Почему именно мы?</h1>
                <div class="info_text">
                     <p>Наша компания занимается продажей комнатных растений на протяжении 10 лет. Мы очень бережно относимся к уходу за растениями и их доставке. Уже более десяти тысяч покупателей отдали своё предпочтение LotPlant.</p>
                </div>
            </div>
            <div class="info_img_div">
                <img src="{{ asset('storage/img/main2.png') }}">
            </div>
        </section>
        <section class="comments">
            <div class="comments_div">
            <h1>Отзывы наших клиентов</h1>
            <div class="comments_div2">
            @include('components/comments')
            </div>
            </div>
        </section>
        <footer>
            <div class="logo_footer_div">
            <a href="{{ route('mainpage') }}"><img src="{{ asset('storage/img/logo.png')}}" alt="" class="footer_img"></a>
            <p>LotPlant</p>
            </div>
            <div class="num">
                <p>тел. 8800-555-35-35</p>
            </div>
            <div class="soc">
                <div class="soc_div">
                <img src="{{ asset('storage/img/whatsupp.png') }}">
                </div>
                <div class="soc_div">
                <img src="{{ asset('storage/img/telegram.png') }}">
                </div>
                <div class="soc_div">
                <img src="{{ asset('storage/img/vk.png') }}">
                </div>
            </div>
        </footer>
    </div>
    
<script>
    
        function addCart(plant_id) {
            $.ajax({
                    url: '{{ route('addCart') }}',
                    method: 'GET',
                    data: {
                        plant_id: plant_id
                    },
                    success: function(data) {
                        console.log(data);
                    }
                })
                .fail(function(jqXHR, ajaxOpions, throwError) {
                    console.log(data);
                })
        }
    
</script>
</body>

</html>
