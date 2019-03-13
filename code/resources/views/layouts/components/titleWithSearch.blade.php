<div class="row mb-3">
    <div class="col">
        <h2 class="font-weight-bold">
            {{ $slot }}
            <form class="form-inline float-right" action="{{ $search_url }}">
                <input class="form-control mr-sm-2" type="search" placeholder="{{ $search_text }}" aria-label="Search" name="q" value="{{ isset($_GET['q']) ? $_GET['q'] : '' }}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Кофтан</button>
            </form>
        </h2>
    </div>
</div>