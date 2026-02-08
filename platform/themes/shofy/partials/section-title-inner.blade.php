@php
    $highlightText = $shortcode->highlight_text ?? ($highlightText ?? null);

    if ($highlightText) {
        $title = str_replace($highlightText, '<span>' . $highlightText . '</span>', $title);
    } else {
        $title = preg_replace('/([\p{L}\p{N}]+)/u', '<span>$1</span>', $title, 1);
    }
@endphp

{!! BaseHelper::clean($title) !!}

@if(theme_option('section_title_shape_decorated', 'style-1') !== 'style-3')
    {!! Theme::partial('section-title-shape') !!}
@endif
