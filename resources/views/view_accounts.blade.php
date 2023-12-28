@extends('layouts.main')

@push('title')
    Accounts
@endpush

@section('main-section')
    <div style="text-align: end;">

        <a class="btn btn-primary mb-3" href="{{ route('account.add') }}" role="button">Add New</a>
    </div>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center">Account Name</th>
                    <th scope="col" style="text-align: center">Account Number</th>
                    <th scope="col" style="text-align: center">Balance</th>
                    <th scope="col" style="text-align: center">CVV</th>
                    <th scope="col" style="text-align: center">Status</th>
                    <th scope="col" style="text-align: center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr class="">
                        <td style="text-align: center" scope="row">{{ $account->name }}</td>
                        <td style="text-align: center" scope="row">{{ $account->number }}</td>
                        <td style="text-align: center" scope="row">{{ $account->balance }}</td>
                        <td style="text-align: center" scope="row">{{ $account->cvv }}</td>
                        <td style="text-align: center" scope="row">
                            @if ($account->status == 1)
                                <a href="{{route('account.status.update', ['id' => $account->account_id, 'status' => '0'])}}" role="button" class="btn btn-success">
                                    Active
                                </a>
                            @else
                                <a href="{{route('account.status.update', ['id' => $account->account_id, 'status' => '1'])}}" role="button" class="btn btn-warning">
                                    Inactive
                                </a>
                            @endif
                        </td>
                        <td style="text-align: center" scope="row">
                            <a href="{{ route('account.edit', ['id' => $account->account_id]) }}" class="btn btn-primary">
                                Edit
                            </a>
                            <a href="{{ route('account.delete', ['account' => $account->account_id]) }}" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
