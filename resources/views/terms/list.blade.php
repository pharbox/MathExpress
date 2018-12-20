@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h2>
                    Хамаи Модулхо
                    <a
                            class="btn btn-primary float-right"
                            href="{{ route('modules.create') }}"
                    >
                        Модули нав
                    </a>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class=""
                     id="termsList"
                >
                    <h1 class="text-primary">A</h1>
                    @for($i = 0; $i < rand(4,10); $i++)
                        <div class="card bg-white shadow my-3">
                            <div class="card-header"
                                 id="heading{{$i}}"
                            >
                                <h5 class="mb-0">
                                    <button class="btn btn-link"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapse{{$i}}"
                                            aria-expanded="false"
                                            aria-controls="collapse{{$i}}"
                                    >
                                        Collapsible Group Item #{{$i+1}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$i}}"
                                 class="collapse"
                                 aria-labelledby="heading{{$i}}"
                                 data-parent="#termsList"
                            >
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    @endfor
                    <h1 class="text-primary">B</h1>
                    @for($i = 0; $i < rand(4,10); $i++)
                        <div class="card bg-white shadow my-3">
                            <div class="card-header"
                                 id="heading{{$i}}"
                            >
                                <h5 class="mb-0">
                                    <button class="btn btn-link"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapse{{$i}}"
                                            aria-expanded="false"
                                            aria-controls="collapse{{$i}}"
                                    >
                                        Collapsible Group Item #{{$i+1}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$i}}"
                                 class="collapse"
                                 aria-labelledby="heading{{$i}}"
                                 data-parent="#termsList"
                            >
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">First</button>
                        @for($i = 0; $i < rand(4,10); $i++)
                            <button type="button" class="btn btn-secondary">{{$i+1}}</button>
                        @endfor
                        <button type="button" class="btn btn-secondary">Last</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
