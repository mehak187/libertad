<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div back_img py-5">
            <div class="container-fluid px-md-5 px-3">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href="{{ asset('/') }}">
                            <img src="./imgs/home.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-play-fill text-white"></i>
                        <p class="text-white m-0 font-22">Books</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-10">
                        <div class="d-flex gap-2 align-items-center border-golden rounded-4 p-sm-3 p-2 mx-sm-0 mx-2">
                            <div class="">
                                <h3 class="text-white m-0 f-search">Search:</h3>
                            </div>
                            <div class="w-100">
                                <input type="text"  id="myinput"
                                    class="form-control sky-bg shadow-none text-dark border border-dark py-2"
                                    placeholder="Keyword"  onkeyup="searchFunction()">
                            </div>
                            <div class="">
                                <div class="d-sm-block d-none">
                                    <button
                                        class="py-2 px-3 border border-warning bg-warning rounded-3 d-flex align-items-center">
                                        <i class="bi bi-search text-dark me-2"></i>Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10">
                        <div class="row mt-4" id="content">
                            @foreach ($books as $book)
                                <div class="col-lg-4 col-sm-6 mt-3 city-result">
                                    <div class="sky-bg rounded-4 p-3 shadow">
                                        <div>
                                            <img src="<?php echo asset('uploads/' . $book['image']); ?>" alt="" class="img-fluid rounded-3">
                                        </div>
                                        <div class="d-flex justify-content-between  mt-3">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <h6 class="text-nowrap m-0">Book name:</h6>
                                                <p class="font-15 m-0 searchable">{{ $book['book_name'] }}</p>
                                            </div>
                                            <a href="{{ $book['link'] }}" class="text-decoration-none text-dark fs-5"><i
                                                    class="fas fa-download"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <h6 class="m-0">Author:</h6>
                                            <p class="m-0 author">{{ $book['author_name'] }}</p>
                                        </div>
                                        <div>
                                            <h6 class="m-0">Description:</h6>
                                            <p class="m-0">
                                                {{ $book['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <nav id="pagination" class="mt-3 main-paging">
                        <ul class="pagination d-flex gap-3">
                            <li class="page-item">
                                <a class="page-link bg-transparent border-golden rounded-3 golden-clr"
                                    href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-transparent border-golden rounded-3 golden-clr"
                                    href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-transparent border-golden rounded-3 golden-clr"
                                    href="#">3</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    @include('template.footer')
    @include('template.jslinks')
    <script>
        function searchFunction() {
            var input, filter, ul, li, a, i, author;
            input = document.getElementById('myinput');
            filter = input.value.toUpperCase();
            li = document.getElementsByClassName('city-result');
    
            cusall = document.getElementsByClassName('customer-all-main');
            var resultsFound = false;
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByClassName('searchable')[0];
                author = li[i].getElementsByClassName('author')[0];
                if (a.innerHTML.toUpperCase().includes(filter) || author.innerHTML.toUpperCase().includes(filter)) {
                    li[i].style.display = "";
                    resultsFound = true;
                } else {
                    li[i].style.display = 'none';
                }
            }
            document.getElementById('filter-heading').style.display = 'none';
            for (var j = 0; j < cusall.length; j++) {
                cusall[j].style.display = 'none';
            }
            if (!resultsFound) {
                document.getElementById('searcherror').style.display = 'block';
                document.getElementById('error_msg').style.display = 'none';
            } else {
                document.getElementById('searcherror').style.display = 'none';
            }
        }
    </script>
</body>

</html>
