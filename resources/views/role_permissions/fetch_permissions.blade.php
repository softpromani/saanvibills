@if (isset($selectrole))
<div class="card mt-5">
    <div class="card-header bg-primary text-white">
        Permissions
    </div>
    <div class="card-body">
        <form action="{{route('assign_permission')}}" method="post">
            @csrf
            <input type="hidden" name='roleid' value="{{ $selectrole->id }}">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Permissions Name</th>
                        <th>Menu</th>
                        <th>Create</th>
                        <th>Read</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!isset($permissionnames))
                        <tr>
                            <td colspan="7">No permission assigned</td>
                        </tr>
                    @else
                        @foreach ($permissionnames as $pname)
                            <tr>
                                <td>
                                    {{ $pname->name }}
                                </td>
                                @foreach ($pname->permissions as $permission)
                                    <td>
                                        <input type="checkbox" class="form-check" value="{{ $permission->name }}"
                                            name='rolepermissions[]'
                                            {{ $selectrole->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
            <button class="btn btn-primary" type="submit"> Update Permission</button>
        </form>
    </div>
</div>
 @endif
