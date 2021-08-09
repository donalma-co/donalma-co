@extends('layouts.admin')
@section('content')
@can('transaction_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.transactions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.transaction.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.transaction.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Transaction">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.merchant') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.state_pol') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.response_code_pol') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.reference_sale') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.reference_pol') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.extra_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.extra_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.payment_method') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.payment_method_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.installments_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.value') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.tax') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.transaction_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.email_buyer') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.cus') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.pse_bank') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.billing_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.shipping_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.account_number_ach') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.account_type_ach') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.administrative_fee') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.administrative_fee_base') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.administrative_fee_tax') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.authorization_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.bank') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.billing_city') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.billing_country') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.commision_pol') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.commision_pol_currency') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.customer_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.payment_methodid') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.payment_request_state') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.pse_reference_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.pse_reference_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.pse_reference_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.response_message_pol') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.transaction_bank') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.transaction') }}
                        </th>
                        <th>
                            {{ trans('cruds.transaction.fields.payment_method_name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $key => $transaction)
                        <tr data-entry-id="{{ $transaction->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $transaction->id ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->merchant ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->state_pol ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->response_code_pol ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->reference_sale ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->reference_pol ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->extra_1 ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->extra_2 ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->payment_method ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->payment_method_type ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->installments_number ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->value ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->tax ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->transaction_date ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->email_buyer ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->cus ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->pse_bank ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->description ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->billing_address ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->shipping_address ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->phone ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->account_number_ach ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->account_type_ach ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->administrative_fee ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->administrative_fee_base ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->administrative_fee_tax ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->authorization_code ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->bank ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->billing_city ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->billing_country ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->commision_pol ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->commision_pol_currency ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->customer_number ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->date ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->ip ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->payment_methodid ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->payment_request_state ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->pse_reference_1 ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->pse_reference_2 ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->pse_reference_3 ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->response_message_pol ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->transaction_bank ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->transaction ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->payment_method_name ?? '' }}
                            </td>
                            <td>
                                @can('transaction_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.transactions.show', $transaction->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('transaction_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.transactions.edit', $transaction->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('transaction_delete')
                                    <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('transaction_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.transactions.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Transaction:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection