<h1>Member List</h1>
<table border=1>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
    </tr>
    {{-- @foreach($customers as $customer) --}}
        <tr>
            <td>{{$customer['ID']}}</td>
            <td>{{$customer['FIRST_NAME']}}</td>
            <td>{{$customer['LAST_NAME']}}</td>
        </tr>
    {{-- @endforeach --}}
    
</table>