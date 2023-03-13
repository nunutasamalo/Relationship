<h1>All Members</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile No</th>
            <th>Roles</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->id }}</td>
            <td>{{ $member->firstName }}</td>
            <td>{{ $member->lastName }}</td>
            <td>{{ $member->mobileNo }}</td>
            <td>
                <ul>
                    @foreach ($member->roles as $role)
                        <li>{{ $role->name }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
