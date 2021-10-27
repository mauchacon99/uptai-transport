@section('pageTitle', 'UPTAI')
<div class="row page-header no-background no-shadow margin-b-0">
    <div class="col-lg-6 align-self-center ">
      <h2> {{ $title ?? ''}} </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a 
                href="#">
                    {{ $description ?? 'Descripcion'}}
                </a>
            </li>
            <li class="breadcrumb-item active"> {{ $state ?? 'tabla'}} </li>
        </ol>
    </div>
</div>