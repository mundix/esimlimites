@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable " id="table-dashboard">
                    <thead>
                    <tr>
                        <th width="10"></th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>&nbsp</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(function () {
            const table = $('#table-dashboard').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.applications.get') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'first_name', name: 'name'},
                    {data: 'last_name', name: 'name'},
                    {data: 'location', name: 'name'},
                    {data: 'plan_type', name: 'name'},
                    {data: 'iccid', name: 'name'},
                    {data: 'provider', name: 'name'},
                    {data: 'validity', name: 'name'},
                    {data: 'status', name: 'name'},
                    {data: 'payment', name: 'name'},
                    {data: 'qty', name: 'name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endpush
@push('styles')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush