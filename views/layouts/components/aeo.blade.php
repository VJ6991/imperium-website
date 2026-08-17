{{--
    Renders a page's AEO content (how-it-works steps, comparison table, FAQ)
    from cms/data/aeo.json via the Aeo helper. Include this file passing a
    'slug' variable naming the page (see any vertical view for the call site).
    Silently renders nothing if the slug has no AEO content yet. This is the
    ONLY place these pages render FAQ text — Seo::page() builds the matching
    FAQPage JSON-LD from the exact same Aeo::page() array, so schema can never
    claim a question the page doesn't actually show.

    The TL;DR ("In short") band this used to also render was removed
    2026-08-15 at the owner's request — see reports/30-geo-implementation-log.md
    §5/§6. cms/data/aeo.json's tldr/last_updated fields are left in place as
    inert data, not rendered anywhere by this partial anymore.

    NOTE: do not write a literal "at-sign include(" example anywhere in this
    comment block, even inside @php/@verbatim — the Blade compiler matches
    directive syntax as plain text before PHP comment semantics apply, so an
    example call in a comment silently compiles into a second, real include.
--}}
@php
    $aeoData = isset($aeoData) ? $aeoData : (class_exists('Aeo') ? Aeo::page($slug) : null);
@endphp
@if($aeoData)
<div class="imp-aeo">

    @if(!empty($aeoData['how_it_works']))
    <section class="imp-aeo-block">
        <h2 class="imp-aeo-h2">{{ !empty($aeoData['how_it_works_heading']) ? $aeoData['how_it_works_heading'] : 'How does it work?' }}</h2>
        <ol class="imp-aeo-steps">
            {{-- Raw output: how_it_works steps may contain trusted <a href>
                 internal links, same as faq-a/table cells below. --}}
            @foreach($aeoData['how_it_works'] as $step)
            <li>{!! $step !!}</li>
            @endforeach
        </ol>
    </section>
    @endif

    @if(!empty($aeoData['comparison_table']))
    @php $ct = $aeoData['comparison_table']; @endphp
    <section class="imp-aeo-block">
        @if(!empty($ct['heading']))<h2 class="imp-aeo-h2">{{ $ct['heading'] }}</h2>@endif
        <div class="imp-aeo-table-wrap">
            <table class="imp-aeo-table">
                <thead>
                    <tr>
                        @foreach($ct['columns'] as $col)
                        <th scope="col">{{ $col }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($ct['rows'] as $row)
                    <tr>
                        @foreach($row as $i => $cell)
                        @if($i === 0)
                        <th scope="row">{{ $cell }}</th>
                        @else
                        <td>{!! $cell !!}</td>
                        @endif
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if(!empty($ct['source_note']))
        <p class="imp-aeo-source-note">{{ $ct['source_note'] }}</p>
        @endif
    </section>
    @endif

    @if(!empty($aeoData['faqs']))
    <section class="imp-aeo-block imp-aeo-faq" aria-label="Frequently asked questions">
        <h2 class="imp-aeo-h2">Frequently asked questions</h2>
        @foreach($aeoData['faqs'] as $faq)
        <details class="imp-aeo-faq-item">
            <summary class="imp-aeo-faq-q">{{ $faq['q'] }}<span class="imp-aeo-faq-icon" aria-hidden="true"></span></summary>
            <p class="imp-aeo-faq-a">{!! $faq['a'] !!}</p>
        </details>
        @endforeach
    </section>
    @endif

</div>
@endif
