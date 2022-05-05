<table {{ $attributes->merge(['class' => 'w-full whitespace-no-wrap']) }}>
    <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
            {{ $head }}
        </tr>
    </thead>
    <tbody>
        {{ $body }}
    </tbody>
</table>
