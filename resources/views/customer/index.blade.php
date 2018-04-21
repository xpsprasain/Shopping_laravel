<h1>Customers <a href="{{route('customer.create') }}" class="btn btn-primary pull-right btn-sn">Add New Customer</a></h1>
<div class="table">
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>S.N.</th>
            <th>First Name</th>


        </tr>
        </thead>
        <tbody>
        {{--it loops the varaible from the data of the customer--}}
        @foreach($customers as $key=>$customer)
            <tr>
                <td>{{$key + 1}}</td>
                <td><a href="{{route('customer.show',['id'=>$customer->customer_id])}}">{{$customer->first_name}}</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>