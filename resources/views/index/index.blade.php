@include('partial.header')

<div>

    I am body <br/>
    @foreach ($arr as $row)
        <p>This is row <%$row->sn%></p>
    @endforeach

    <%$test%>

</div>

@include('partial.footer')
