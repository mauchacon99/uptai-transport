@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">

        					 <div class="card-header card-default">
							<div class="float-right mt-10">
								<a href="javascript: void(0);" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Add New Product</a>
                            </div>
							Products
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
						



            <div class="card-body">
                <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>@newyork</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>@london</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>@sanfrancisco</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>@edinburgh</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Director</td>
                    <td>London</td>
                    <td>@london</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>@newyork</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>@london</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>@sanfrancisco</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>@edinburgh</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Director</td>
                    <td>London</td>
                    <td>@london</td>
                </tr>
                </tbody>
            </table>
                </div>
        </div>
    </div>
</div>
@endsection