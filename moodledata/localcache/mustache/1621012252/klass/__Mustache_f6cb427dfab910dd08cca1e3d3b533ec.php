<?php

class __Mustache_f6cb427dfab910dd08cca1e3d3b533ec extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('num'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        class="section main ';
        // 'onlysummary' section
        $value = $context->find('onlysummary');
        $buffer .= $this->sectionA0d9db6ba11d7b6bcca170f8d7ae948d($context, $indent, $value);
        $buffer .= ' clearfix
';
        $buffer .= $indent . '              ';
        // 'ishidden' section
        $value = $context->find('ishidden');
        $buffer .= $this->section5a8152d3d9f2c97a8df7cb314c7a68ea($context, $indent, $value);
        $buffer .= ' ';
        // 'iscurrent' section
        $value = $context->find('iscurrent');
        $buffer .= $this->sectionFabacf5fcd35f66c980bc5b597ed4c91($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '              ';
        // 'isstealth' section
        $value = $context->find('isstealth');
        $buffer .= $this->sectionDd936c2a69a972ffdd63f1e0216d6abb($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        role="region"
';
        $buffer .= $indent . '        aria-labelledby="sectionid-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-title"
';
        $buffer .= $indent . '        data-sectionid="';
        $value = $this->resolveValue($context->find('num'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-sectionreturnid="';
        $value = $this->resolveValue($context->find('sectionreturnid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        // 'singleheader' section
        $value = $context->find('singleheader');
        $buffer .= $this->sectionF0eabdfff873d2e58928b0741ef3f0e5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="left side">';
        // 'iscurrent' section
        $value = $context->find('iscurrent');
        $buffer .= $this->section5d0ebc0d24d67a42a3360a7ef71b50a5($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="right side">
';
        // 'controlmenu' section
        $value = $context->find('controlmenu');
        $buffer .= $this->section3595a53249b3161f847019612c67becc($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="content">
';
        $buffer .= $indent . '        ';
        // 'header' section
        $value = $context->find('header');
        $buffer .= $this->sectionF0eabdfff873d2e58928b0741ef3f0e5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('completioninfo'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'availability' section
        $value = $context->find('availability');
        $buffer .= $this->section288fbe77ed1ae002e36b86b2d3178090($context, $indent, $value);
        $buffer .= $indent . '        <div class="summary">
';
        // 'summary' section
        $value = $context->find('summary');
        $buffer .= $this->section6c00807a3b264b75f73d327b7020452b($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        // 'cmsummary' section
        $value = $context->find('cmsummary');
        $buffer .= $this->sectionF0bb4028c043b60ebb0deae95f9bb566($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'cmlist' section
        $value = $context->find('cmlist');
        $buffer .= $this->sectionFdca97e4e0dc8fd6f6da6af61ee94d46($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('cmcontrols'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function sectionA0d9db6ba11d7b6bcca170f8d7ae948d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' section-summary ';
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
                
                $buffer .= ' section-summary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a8152d3d9f2c97a8df7cb314c7a68ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hidden ';
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
                
                $buffer .= ' hidden ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFabacf5fcd35f66c980bc5b597ed4c91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' current ';
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
                
                $buffer .= ' current ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd936c2a69a972ffdd63f1e0216d6abb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' orphaned ';
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
                
                $buffer .= ' orphaned ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0eabdfff873d2e58928b0741ef3f0e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_course/local/section_format/header }} ';
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
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format/header')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d0ebc0d24d67a42a3360a7ef71b50a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{currentlink}}} ';
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
                $value = $this->resolveValue($context->find('currentlink'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3595a53249b3161f847019612c67becc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_course/local/section_format/controlmenu }}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format/controlmenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section288fbe77ed1ae002e36b86b2d3178090(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_course/local/section_format/availability }}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format/availability')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c00807a3b264b75f73d327b7020452b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_course/local/section_format/summary }}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format/summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0bb4028c043b60ebb0deae95f9bb566(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_course/local/section_format/cmsummary }} ';
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
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format/cmsummary')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdca97e4e0dc8fd6f6da6af61ee94d46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_course/local/section_format/cmlist }} ';
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
                if ($partial = $this->mustache->loadPartial('core_course/local/section_format/cmlist')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
