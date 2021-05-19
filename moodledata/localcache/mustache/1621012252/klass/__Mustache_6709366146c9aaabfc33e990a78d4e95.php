<?php

class __Mustache_6709366146c9aaabfc33e990a78d4e95 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showmovehere' section
        $value = $context->find('showmovehere');
        $buffer .= $this->section92737a10595b16982d63e4082cecbb2a($context, $indent, $value);
        // 'hascms' section
        $value = $context->find('hascms');
        $buffer .= $this->sectionA2b8ac3d5806ed83116c7e6a200da956($context, $indent, $value);

        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
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
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92737a10595b16982d63e4082cecbb2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<p>{{movingstr}} (<a href="{{{cancelcopyurl}}}">{{#str}} cancel {{/str}}</a>)</p>
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
                
                $buffer .= $indent . '<p>';
                $value = $this->resolveValue($context->find('movingstr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' (<a href="';
                $value = $this->resolveValue($context->find('cancelcopyurl'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
                $buffer .= '</a>)</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4bce5b40d3d53d3056b989c49a6137b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="movehere">
                <a href="{{{moveurl}}}" title="{{strmovefull}}" class="movehere"></a>
            </li>
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
                
                $buffer .= $indent . '            <li class="movehere">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('moveurl'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('strmovefull'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="movehere"></a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f39840fb7191ed62b7ca9f6c1d5c427(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_course/local/section_format/cmitem}}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format/cmitem')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87723476cb678dab880fe8fa82b3dd92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#showmovehere}}
            <li class="movehere">
                <a href="{{{moveurl}}}" title="{{strmovefull}}" class="movehere"></a>
            </li>
        {{/showmovehere}}
        {{#cmitem}}
            {{> core_course/local/section_format/cmitem}}
        {{/cmitem}}
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
                
                // 'showmovehere' section
                $value = $context->find('showmovehere');
                $buffer .= $this->sectionF4bce5b40d3d53d3056b989c49a6137b($context, $indent, $value);
                // 'cmitem' section
                $value = $context->find('cmitem');
                $buffer .= $this->section0f39840fb7191ed62b7ca9f6c1d5c427($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC24fdf1fee96c01dcc4b9386147d4f9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="movehere">
        <a href="{{{movetosectionurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
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
                
                $buffer .= $indent . '    <li class="movehere">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('movetosectionurl'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('strmovefull'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="movehere"></a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2b8ac3d5806ed83116c7e6a200da956(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="section img-text">
    {{#cms}}
        {{#showmovehere}}
            <li class="movehere">
                <a href="{{{moveurl}}}" title="{{strmovefull}}" class="movehere"></a>
            </li>
        {{/showmovehere}}
        {{#cmitem}}
            {{> core_course/local/section_format/cmitem}}
        {{/cmitem}}
    {{/cms}}
    {{#showmovehere}}
    <li class="movehere">
        <a href="{{{movetosectionurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
    {{/showmovehere}}
    </ul>
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
                
                $buffer .= $indent . '    <ul class="section img-text">
';
                // 'cms' section
                $value = $context->find('cms');
                $buffer .= $this->section87723476cb678dab880fe8fa82b3dd92($context, $indent, $value);
                // 'showmovehere' section
                $value = $context->find('showmovehere');
                $buffer .= $this->sectionC24fdf1fee96c01dcc4b9386147d4f9f($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
