<?php

class __Mustache_0bc3b1f950813576dc88d6f1b7a98d84 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<h3 class="sectionid-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-title sectionname">
';
        // 'url' section
        $value = $context->find('url');
        $buffer .= $this->section123edd6ef72fd6cdd045c1076119a52f($context, $indent, $value);
        // 'url' inverted section
        $value = $context->find('url');
        if (empty($value)) {
            
            $buffer .= $indent . '    <span>';
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= $value;
            $buffer .= '</span>
';
        }
        $buffer .= $indent . '</h3>
';

        return $buffer;
    }

    private function section2446e1efa274c39c0eab1ef564e1f8ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text ';
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
                
                $buffer .= ' dimmed_text ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section123edd6ef72fd6cdd045c1076119a52f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{url}}}" class="{{#ishidden}} dimmed_text {{/ishidden}}">{{name}}</a>
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
                $buffer .= '" class="';
                // 'ishidden' section
                $value = $context->find('ishidden');
                $buffer .= $this->section2446e1efa274c39c0eab1ef564e1f8ed($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
