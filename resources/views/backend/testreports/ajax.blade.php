@if(isset($data) && count($data)>0)
    @php
        $record_id = $offset;
    @endphp
    <table class="table k-table table-hover">
        <thead>
        <tr>
            <th width="10px">
                <input type="checkbox" name="row_check_all" class="row_check_all">
            </th>
            <th>Id</th>
            <!-- ajax table header -->
            <th>Patient Name</th>
            <th>Lab Test</th>
            <th>Referral</th>
            <th>Telephone</th>
            <th>Total Price</th>
            <th>Date Created</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr class="row_{{ $v->id }}">
                <td>
                    <input type="checkbox" name=data"row_checkbox[]" class="row_checkbox" value="{{ $v->id }}"
                           data-id="{{ $v->id }}">
                </td>
                <td>{{ $v->id  }}</td>
                <!-- ajax table body -->
                <td><a href='{{ $v->show_route }}'>{{ $v->patient_name }}</a></td>
                @php
                $labtestsIds = explode(',',$v->lab_test);
                @endphp
                <td>
                @foreach ($labtestsIds as $labtestId)
                    @php
                        $labTest = $labtests->where('id', '=', $labtestId)->first();
                    @endphp
                    @if(isset($labTest))
                            {{$labTest->test_name}},
                        @endif
                @endforeach
                </td>
                    @php
                        $doctor = $doctors->where('id', '=', $v->referral)->first();
                @endphp

                <td> @if(isset($doctor))
                        {{$doctor->doctor_name}}
                    @endif
                </td>
                <td>{{ $v->telephone }}</td>
                <td>{{ $v->total_price }}</td>
                <td>{{ Date('d M, Y',strtotime($v->created_at)) }}</td>
                <td>
                    @if($v->deleted_at==null)
                        <a href="{{ $v->edit_route }}" class="btn k-btn-sm k-btn-primary btn-sm">Edit</a>
                        <a href="#" data-id="{{ $v->id }}"
                           class="btn k-btn-sm k-btn-danger btn-sm trash_btn delete{{ $v->id }}">Trash</a>
                    @else
                        <a href="#" data-id="{{ $v->id }}"
                           class="btn k-btn-sm k-btn-primary restore_btn restore{{ $v->id }} btn-sm">Restore</a>
                        <a href="#" data-id="{{ $v->id }}"
                           class="btn k-btn-sm k-btn-danger delete_btn delete{{ $v->id }} btn-sm">Delete</a>
                    @endif
                </td>
            </tr>
            <?php $page_number++ ?>

        @endforeach
        <tbody>
    </table>
    <div class="text-muted p-2"></div>
@else
    <div class="alert alert-warning" align="center">
        Opps, seems like records not available.
    </div>
@endif
@if($pagination['total_records']>$pagination['item_per_page'])
    <div class="pl-3">
        <div class="paging_simple_numbers">
            <ul class="pagination">
                    <?php
                    echo paginate_function($pagination['item_per_page'], $pagination['current_page'], $pagination['total_records'], $pagination['total_pages']);
                    ?>
            </ul>
        </div>
    </div>
@endif
