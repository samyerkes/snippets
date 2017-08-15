@extends('layouts.dashboard')

@section('content')

	<table-component
	     :data="{{ $snippets }}"
         sort-by="Title"
         sort-order="asc"
         table-class="table"
         :show-caption="false"
         filter-placeholder="Filter..."
         filter-input-class="input"
	>
		 <table-column show="title" label="Title">
            <template scope="snippet">
                <a v-text="snippet.title" :href="'snippets/' + snippet.id"></a>
            </template>
        </table-column>
		 <table-column show="body" label="Body"></table-column>
		 <table-column :sortable="false" :filterable="false">
            <template scope="snippet">
                <a v-text="'Edit'" :href="'snippets/' + snippet.id + 'edit'" class="button is-small"></a>
            </template>
        </table-column>
	 </table-component>

@endsection