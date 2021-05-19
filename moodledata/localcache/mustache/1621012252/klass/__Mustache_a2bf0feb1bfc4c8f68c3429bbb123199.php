<?php

class __Mustache_a2bf0feb1bfc4c8f68c3429bbb123199 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showaddsection' section
        $value = $context->find('showaddsection');
        $buffer .= $this->section7857b0be1c66b98c99ed74be3c258b46($context, $indent, $value);

        return $buffer;
    }

    private function sectionD0146a3b4454c5bedc72ca5fe59e6e68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' increasesections, moodle ';
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
                
                $buffer .= ' increasesections, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73299e9d0dd79cf4a0279246aa5b3dc9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/switch_plus, moodle, {{#str}} increasesections, moodle {{/str}}';
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
                
                $buffer .= 't/switch_plus, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD0146a3b4454c5bedc72ca5fe59e6e68($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9bc4955e97b3e03de23dae13ffa6f74c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{url}}}" class="increase-sections">
        {{#pix}}t/switch_plus, moodle, {{#str}} increasesections, moodle {{/str}}{{/pix}}
    </a>
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="increase-sections">
';
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section73299e9d0dd79cf4a0279246aa5b3dc9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22686b7e0eacfe8762121dcc2f0e21db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reducesections, moodle ';
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
                
                $buffer .= ' reducesections, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8dc0fa6941aa91b751a414ccbee7293e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/switch_minus, moodle, {{#str}} reducesections, moodle {{/str}}';
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
                
                $buffer .= 't/switch_minus, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section22686b7e0eacfe8762121dcc2f0e21db($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5a549f24b624d4beba7d1296af460e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{url}}}" class="reduce-sections">
        {{#pix}}t/switch_minus, moodle, {{#str}} reducesections, moodle {{/str}}{{/pix}}
    </a>
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="reduce-sections">
';
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section8dc0fa6941aa91b751a414ccbee7293e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB338c5baf6d3a5175fb763ee992be6c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/add, moodle ';
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
                
                $buffer .= ' t/add, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE21d43f2e28dde7e91c85d672a3b32ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{url}}}" class="add-sections" data-add-sections="{{title}}" data-new-sections="{{newsection}}">
        {{#pix}} t/add, moodle {{/pix}} {{title}}
    </a>
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="add-sections" data-add-sections="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-new-sections="';
                $value = $this->resolveValue($context->find('newsection'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionB338c5baf6d3a5175fb763ee992be6c6($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7857b0be1c66b98c99ed74be3c258b46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="changenumsections" class="mdl-right">
    {{#increase}}
    <a href="{{{url}}}" class="increase-sections">
        {{#pix}}t/switch_plus, moodle, {{#str}} increasesections, moodle {{/str}}{{/pix}}
    </a>
    {{/increase}}
    {{#decrease}}
    <a href="{{{url}}}" class="reduce-sections">
        {{#pix}}t/switch_minus, moodle, {{#str}} reducesections, moodle {{/str}}{{/pix}}
    </a>
    {{/decrease}}
    {{#addsections}}
    <a href="{{{url}}}" class="add-sections" data-add-sections="{{title}}" data-new-sections="{{newsection}}">
        {{#pix}} t/add, moodle {{/pix}} {{title}}
    </a>
    {{/addsections}}
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
                
                $buffer .= $indent . '<div id="changenumsections" class="mdl-right">
';
                // 'increase' section
                $value = $context->find('increase');
                $buffer .= $this->section9bc4955e97b3e03de23dae13ffa6f74c($context, $indent, $value);
                // 'decrease' section
                $value = $context->find('decrease');
                $buffer .= $this->sectionE5a549f24b624d4beba7d1296af460e2($context, $indent, $value);
                // 'addsections' section
                $value = $context->find('addsections');
                $buffer .= $this->sectionE21d43f2e28dde7e91c85d672a3b32ca($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
