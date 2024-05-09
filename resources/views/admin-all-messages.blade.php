@include('components.admin-dashboard-layout')

<div class="col-md-9">
    <div class="table-responsive">
        <table class="table">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">Nume</th>
                    <th scope="col">Prenume</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Mesaj</th>
                    <th scope="col">Ora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $element)
                    <tr>
                        <td>{{ $element->name }}</td>
                        <td>{{ $element->second_name }}</td>
                        <td>{{ $element->mail }}</td>
                        <td>{{ $element->message_content }}</td>
                        <td>{{ $element->created_at }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
</body>

</html>
