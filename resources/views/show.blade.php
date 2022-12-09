@extends('app')

@section('content')
    <h1 class="page-header text-center">Laravel Jquery Ajax CRUD | Laravel 9</h1>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Members Table
                <button type="button" id="add" class="btn btn-primary pull-right">Member</button>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Action</th>
                </thead>
                <tbody id="memberBody">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            showMember();

            function showMember() {
                $.get("{{ url('show') }}", function(data) {
                    $("#memberBody").empty().html(data);
                });
            }
        });
    </script>
@endsection