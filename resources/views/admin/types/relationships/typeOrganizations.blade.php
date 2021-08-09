<div class="m-3">
    @can('organization_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.organizations.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.organization.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.organization.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-typeOrganizations">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.type') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.nit') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.legal_representant') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.dcoumenttype') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.document') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.cargo') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.address') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.department') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.city') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.main_phone_ext') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.postal_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.email') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.finnancial_contact') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.finnancial_contact_email') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.finnancial_contact_phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.finnancial_contact_ext') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.contracting_contact') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.contracting_contact_email') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.contracting_contact_phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.contracting_contact_ext') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.electronic_invoice_contact') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.electronic_invoice_email') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.electronic_invoice_phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.electronic_invoice_ext') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.cash_banks_contact') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.cash_banks_email') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.cash_banks_phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.cash_banks_ext') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.electronic_invoice_authorized_mail') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.requiere_orden_de_compra') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.limit_day_to_invoice') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.national_tax_responsible') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.local_tax_responsible') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.local_tax_ammount') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.big_taxpayer') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.big_taxpayer_resolution') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.seft_taxreteiner') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.seft_taxreteiner_resolution') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.rst_tax') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.donation_certificate_issuer') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.payment_collection_time') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.disclaimer') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.information_privacy_check') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.cc_file') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.rl_file') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.tp_file') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.ar_file') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.bc_file') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.short_description') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.long_description') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.webpage') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.logo') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.tags') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.status') }}
                            </th>
                            <th>
                                {{ trans('cruds.organization.fields.comments') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($organizations as $key => $organization)
                            <tr data-entry-id="{{ $organization->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $organization->id ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->name ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->type->name ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->nit ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->legal_representant ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->dcoumenttype->name ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->document ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->cargo ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->address ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->department->name ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->city->name ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->phone ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->main_phone_ext ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->postal_code ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->email ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->finnancial_contact ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->finnancial_contact_email ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->finnancial_contact_phone ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->finnancial_contact_ext ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->contracting_contact ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->contracting_contact_email ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->contracting_contact_phone ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->contracting_contact_ext ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->electronic_invoice_contact ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->electronic_invoice_email ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->electronic_invoice_phone ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->electronic_invoice_ext ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->cash_banks_contact ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->cash_banks_email ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->cash_banks_phone ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->cash_banks_ext ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->electronic_invoice_authorized_mail ?? '' }}
                                </td>
                                <td>
                                    {{ App\Models\Organization::REQUIERE_ORDEN_DE_COMPRA_RADIO[$organization->requiere_orden_de_compra] ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->limit_day_to_invoice ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->national_tax_responsible ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->national_tax_responsible ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->local_tax_responsible ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->local_tax_responsible ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $organization->local_tax_ammount ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->big_taxpayer ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->big_taxpayer ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $organization->big_taxpayer_resolution ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->seft_taxreteiner ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->seft_taxreteiner ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $organization->seft_taxreteiner_resolution ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->rst_tax ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->rst_tax ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->donation_certificate_issuer ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->donation_certificate_issuer ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ App\Models\Organization::PAYMENT_COLLECTION_TIME_SELECT[$organization->payment_collection_time] ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->disclaimer ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->disclaimer ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $organization->information_privacy_check ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $organization->information_privacy_check ? 'checked' : '' }}>
                                </td>
                                <td>
                                    @if($organization->cc_file)
                                        <a href="{{ $organization->cc_file->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($organization->rl_file)
                                        <a href="{{ $organization->rl_file->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($organization->tp_file)
                                        <a href="{{ $organization->tp_file->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($organization->ar_file)
                                        <a href="{{ $organization->ar_file->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $organization->bc_file ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->short_description ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->long_description ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->webpage ?? '' }}
                                </td>
                                <td>
                                    @if($organization->logo)
                                        <a href="{{ $organization->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                            <img src="{{ $organization->logo->getUrl('thumb') }}">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $organization->tags ?? '' }}
                                </td>
                                <td>
                                    {{ App\Models\Organization::STATUS_SELECT[$organization->status] ?? '' }}
                                </td>
                                <td>
                                    {{ $organization->comments ?? '' }}
                                </td>
                                <td>
                                    @can('organization_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.organizations.show', $organization->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('organization_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.organizations.edit', $organization->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('organization_delete')
                                        <form action="{{ route('admin.organizations.destroy', $organization->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('organization_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.organizations.massDestroy') }}",
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
    pageLength: 25,
  });
  let table = $('.datatable-typeOrganizations:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection