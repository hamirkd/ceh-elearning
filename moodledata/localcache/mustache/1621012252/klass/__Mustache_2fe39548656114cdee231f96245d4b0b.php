<?php

class __Mustache_2fe39548656114cdee231f96245d4b0b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h2 class="accesshide">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '</h2>
';
        $value = $this->resolveValue($context->find('completionhelp'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '<ul class="';
        $value = $this->resolveValue($context->find('format'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'initialsection' section
        $value = $context->find('initialsection');
        $buffer .= $this->sectionE144ff2f9838c6c2e9a809af3e78b7af($context, $indent, $value);
        // 'sections' section
        $value = $context->find('sections');
        $buffer .= $this->sectionE144ff2f9838c6c2e9a809af3e78b7af($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        // 'hasnavigation' section
        $value = $context->find('hasnavigation');
        $buffer .= $this->sectionC4ae2b27e06d7fdb5eb6963c5b53b7ba($context, $indent, $value);
        // 'numsections' section
        $value = $context->find('numsections');
        $buffer .= $this->sectionA12136bcaa92f060be51c570773a7dce($context, $indent, $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionE144ff2f9838c6c2e9a809af3e78b7af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_course/local/section_format }}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0366375259fce40700eb9ea352e2c551(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_course/local/course_format/sectionnavigation }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('core_course/local/course_format/sectionnavigation')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ba41e43e0001499e4a0d51b9f156d24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_course/local/course_format/sectionselector }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('core_course/local/course_format/sectionselector')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4ae2b27e06d7fdb5eb6963c5b53b7ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="single-section">
    {{#sectionnavigation}} {{> core_course/local/course_format/sectionnavigation }} {{/sectionnavigation}}
    <ul class="{{format}}">
    {{#singlesection}}
        {{> core_course/local/section_format }}
    {{/singlesection}}
    </ul>
    {{#sectionselector}} {{> core_course/local/course_format/sectionselector }} {{/sectionselector}}
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="single-section">
';
                $buffer .= $indent . '    ';
                // 'sectionnavigation' section
                $value = $context->find('sectionnavigation');
                $buffer .= $this->section0366375259fce40700eb9ea352e2c551($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    <ul class="';
                $value = $this->resolveValue($context->find('format'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'singlesection' section
                $value = $context->find('singlesection');
                $buffer .= $this->sectionE144ff2f9838c6c2e9a809af3e78b7af($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '    ';
                // 'sectionselector' section
                $value = $context->find('sectionselector');
                $buffer .= $this->section5ba41e43e0001499e4a0d51b9f156d24($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA12136bcaa92f060be51c570773a7dce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_course/local/course_format/addsection}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' ';
                if ($partial = $this->mustache->loadPartial('core_course/local/course_format/addsection')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
