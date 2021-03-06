<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ComponentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\JsonSchema\\Model\\Components';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\JsonSchema\Model\Components;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\JsonSchema\Model\Components();
        $data = clone $data;
        if (property_exists($data, 'schemas') && $data->{'schemas'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'schemas'} as $key => $value) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key) && isset($value)) {
                    $value_1 = $value;
                    if (is_object($value)) {
                        $value_1 = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Model\\Schema', 'json', $context);
                    } elseif (is_object($value) and isset($value->{'$ref'})) {
                        $value_1 = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    }
                    $values[$key] = $value_1;
                    continue;
                }
            }
            $object->setSchemas($values);
            unset($data->{'schemas'});
        }
        if (property_exists($data, 'responses') && $data->{'responses'} !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'responses'} as $key_1 => $value_2) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_1) && isset($value_2)) {
                    $value_3 = $value_2;
                    if (is_object($value_2) and isset($value_2->{'$ref'})) {
                        $value_3 = $this->denormalizer->denormalize($value_2, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (is_object($value_2) and isset($value_2->{'description'})) {
                        $value_3 = $this->denormalizer->denormalize($value_2, 'Jane\\OpenApi\\JsonSchema\\Model\\Response', 'json', $context);
                    }
                    $values_1[$key_1] = $value_3;
                    continue;
                }
            }
            $object->setResponses($values_1);
            unset($data->{'responses'});
        }
        if (property_exists($data, 'parameters') && $data->{'parameters'} !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'parameters'} as $key_2 => $value_4) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_2) && isset($value_4)) {
                    $value_5 = $value_4;
                    if (is_object($value_4) and isset($value_4->{'$ref'})) {
                        $value_5 = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (is_object($value_4) and isset($value_4->{'name'}) and isset($value_4->{'in'})) {
                        $value_5 = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi\\JsonSchema\\Model\\Parameter', 'json', $context);
                    }
                    $values_2[$key_2] = $value_5;
                    continue;
                }
            }
            $object->setParameters($values_2);
            unset($data->{'parameters'});
        }
        if (property_exists($data, 'examples') && $data->{'examples'} !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'examples'} as $key_3 => $value_6) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_3) && isset($value_6)) {
                    $value_7 = $value_6;
                    if (is_object($value_6) and isset($value_6->{'$ref'})) {
                        $value_7 = $this->denormalizer->denormalize($value_6, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (is_object($value_6)) {
                        $value_7 = $this->denormalizer->denormalize($value_6, 'Jane\\OpenApi\\JsonSchema\\Model\\Example', 'json', $context);
                    }
                    $values_3[$key_3] = $value_7;
                    continue;
                }
            }
            $object->setExamples($values_3);
            unset($data->{'examples'});
        }
        if (property_exists($data, 'requestBodies') && $data->{'requestBodies'} !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'requestBodies'} as $key_4 => $value_8) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_4) && isset($value_8)) {
                    $value_9 = $value_8;
                    if (is_object($value_8) and isset($value_8->{'$ref'})) {
                        $value_9 = $this->denormalizer->denormalize($value_8, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (is_object($value_8) and isset($value_8->{'content'})) {
                        $value_9 = $this->denormalizer->denormalize($value_8, 'Jane\\OpenApi\\JsonSchema\\Model\\RequestBody', 'json', $context);
                    }
                    $values_4[$key_4] = $value_9;
                    continue;
                }
            }
            $object->setRequestBodies($values_4);
            unset($data->{'requestBodies'});
        }
        if (property_exists($data, 'headers') && $data->{'headers'} !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'headers'} as $key_5 => $value_10) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_5) && isset($value_10)) {
                    $value_11 = $value_10;
                    if (is_object($value_10) and isset($value_10->{'$ref'})) {
                        $value_11 = $this->denormalizer->denormalize($value_10, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (is_object($value_10)) {
                        $value_11 = $this->denormalizer->denormalize($value_10, 'Jane\\OpenApi\\JsonSchema\\Model\\Header', 'json', $context);
                    }
                    $values_5[$key_5] = $value_11;
                    continue;
                }
            }
            $object->setHeaders($values_5);
            unset($data->{'headers'});
        }
        if (property_exists($data, 'securitySchemes') && $data->{'securitySchemes'} !== null) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'securitySchemes'} as $key_6 => $value_12) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_6) && isset($value_12)) {
                    $value_13 = $value_12;
                    if (is_object($value_12) and isset($value_12->{'$ref'})) {
                        $value_13 = $this->denormalizer->denormalize($value_12, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (is_object($value_12) and (isset($value_12->{'type'}) and $value_12->{'type'} == 'apiKey') and isset($value_12->{'name'}) and (isset($value_12->{'in'}) and ($value_12->{'in'} == 'header' or $value_12->{'in'} == 'query' or $value_12->{'in'} == 'cookie'))) {
                        $value_13 = $this->denormalizer->denormalize($value_12, 'Jane\\OpenApi\\JsonSchema\\Model\\APIKeySecurityScheme', 'json', $context);
                    } elseif (is_object($value_12) and isset($value_12->{'scheme'}) and (isset($value_12->{'type'}) and $value_12->{'type'} == 'http')) {
                        $value_13 = $this->denormalizer->denormalize($value_12, 'Jane\\OpenApi\\JsonSchema\\Model\\HTTPSecurityScheme', 'json', $context);
                    } elseif (is_object($value_12) and (isset($value_12->{'type'}) and $value_12->{'type'} == 'oauth2') and isset($value_12->{'flows'})) {
                        $value_13 = $this->denormalizer->denormalize($value_12, 'Jane\\OpenApi\\JsonSchema\\Model\\OAuth2SecurityScheme', 'json', $context);
                    } elseif (is_object($value_12) and (isset($value_12->{'type'}) and $value_12->{'type'} == 'openIdConnect') and isset($value_12->{'openIdConnectUrl'})) {
                        $value_13 = $this->denormalizer->denormalize($value_12, 'Jane\\OpenApi\\JsonSchema\\Model\\OpenIdConnectSecurityScheme', 'json', $context);
                    }
                    $values_6[$key_6] = $value_13;
                    continue;
                }
            }
            $object->setSecuritySchemes($values_6);
            unset($data->{'securitySchemes'});
        }
        if (property_exists($data, 'links') && $data->{'links'} !== null) {
            $values_7 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'links'} as $key_7 => $value_14) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_7) && isset($value_14)) {
                    $value_15 = $value_14;
                    if (is_object($value_14) and isset($value_14->{'$ref'})) {
                        $value_15 = $this->denormalizer->denormalize($value_14, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (is_object($value_14)) {
                        $value_15 = $this->denormalizer->denormalize($value_14, 'Jane\\OpenApi\\JsonSchema\\Model\\Link', 'json', $context);
                    }
                    $values_7[$key_7] = $value_15;
                    continue;
                }
            }
            $object->setLinks($values_7);
            unset($data->{'links'});
        }
        if (property_exists($data, 'callbacks') && $data->{'callbacks'} !== null) {
            $values_8 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'callbacks'} as $key_8 => $value_16) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_8) && isset($value_16)) {
                    $value_17 = $value_16;
                    if (is_object($value_16) and isset($value_16->{'$ref'})) {
                        $value_17 = $this->denormalizer->denormalize($value_16, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                    } elseif (isset($value_16)) {
                        $values_9 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                        foreach ($value_16 as $key_9 => $value_18) {
                            if (preg_match('/^x-/', $key_9) && isset($value_18)) {
                                $values_9[$key_9] = $value_18;
                                continue;
                            }
                        }
                        $value_17 = $values_9;
                    }
                    $values_8[$key_8] = $value_17;
                    continue;
                }
            }
            $object->setCallbacks($values_8);
            unset($data->{'callbacks'});
        }
        foreach ($data as $key_10 => $value_19) {
            if (preg_match('/^x-/', $key_10)) {
                $object[$key_10] = $value_19;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSchemas()) {
            $values = new \stdClass();
            foreach ($object->getSchemas() as $key => $value) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key) && !is_null($value)) {
                    $value_1 = $value;
                    if (is_object($value)) {
                        $value_1 = $this->normalizer->normalize($value, 'json', $context);
                    } elseif (is_object($value)) {
                        $value_1 = $this->normalizer->normalize($value, 'json', $context);
                    }
                    $values->{$key} = $value_1;
                    continue;
                }
            }
            $data->{'schemas'} = $values;
        }
        if (null !== $object->getResponses()) {
            $values_1 = new \stdClass();
            foreach ($object->getResponses() as $key_1 => $value_2) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_1) && !is_null($value_2)) {
                    $value_3 = $value_2;
                    if (is_object($value_2)) {
                        $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                    } elseif (is_object($value_2)) {
                        $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                    }
                    $values_1->{$key_1} = $value_3;
                    continue;
                }
            }
            $data->{'responses'} = $values_1;
        }
        if (null !== $object->getParameters()) {
            $values_2 = new \stdClass();
            foreach ($object->getParameters() as $key_2 => $value_4) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_2) && !is_null($value_4)) {
                    $value_5 = $value_4;
                    if (is_object($value_4)) {
                        $value_5 = $this->normalizer->normalize($value_4, 'json', $context);
                    } elseif (is_object($value_4)) {
                        $value_5 = $this->normalizer->normalize($value_4, 'json', $context);
                    }
                    $values_2->{$key_2} = $value_5;
                    continue;
                }
            }
            $data->{'parameters'} = $values_2;
        }
        if (null !== $object->getExamples()) {
            $values_3 = new \stdClass();
            foreach ($object->getExamples() as $key_3 => $value_6) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_3) && !is_null($value_6)) {
                    $value_7 = $value_6;
                    if (is_object($value_6)) {
                        $value_7 = $this->normalizer->normalize($value_6, 'json', $context);
                    } elseif (is_object($value_6)) {
                        $value_7 = $this->normalizer->normalize($value_6, 'json', $context);
                    }
                    $values_3->{$key_3} = $value_7;
                    continue;
                }
            }
            $data->{'examples'} = $values_3;
        }
        if (null !== $object->getRequestBodies()) {
            $values_4 = new \stdClass();
            foreach ($object->getRequestBodies() as $key_4 => $value_8) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_4) && !is_null($value_8)) {
                    $value_9 = $value_8;
                    if (is_object($value_8)) {
                        $value_9 = $this->normalizer->normalize($value_8, 'json', $context);
                    } elseif (is_object($value_8)) {
                        $value_9 = $this->normalizer->normalize($value_8, 'json', $context);
                    }
                    $values_4->{$key_4} = $value_9;
                    continue;
                }
            }
            $data->{'requestBodies'} = $values_4;
        }
        if (null !== $object->getHeaders()) {
            $values_5 = new \stdClass();
            foreach ($object->getHeaders() as $key_5 => $value_10) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_5) && !is_null($value_10)) {
                    $value_11 = $value_10;
                    if (is_object($value_10)) {
                        $value_11 = $this->normalizer->normalize($value_10, 'json', $context);
                    } elseif (is_object($value_10)) {
                        $value_11 = $this->normalizer->normalize($value_10, 'json', $context);
                    }
                    $values_5->{$key_5} = $value_11;
                    continue;
                }
            }
            $data->{'headers'} = $values_5;
        }
        if (null !== $object->getSecuritySchemes()) {
            $values_6 = new \stdClass();
            foreach ($object->getSecuritySchemes() as $key_6 => $value_12) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_6) && !is_null($value_12)) {
                    $value_13 = $value_12;
                    if (is_object($value_12)) {
                        $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                    } elseif (is_object($value_12)) {
                        $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                    } elseif (is_object($value_12)) {
                        $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                    } elseif (is_object($value_12)) {
                        $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                    } elseif (is_object($value_12)) {
                        $value_13 = $this->normalizer->normalize($value_12, 'json', $context);
                    }
                    $values_6->{$key_6} = $value_13;
                    continue;
                }
            }
            $data->{'securitySchemes'} = $values_6;
        }
        if (null !== $object->getLinks()) {
            $values_7 = new \stdClass();
            foreach ($object->getLinks() as $key_7 => $value_14) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_7) && !is_null($value_14)) {
                    $value_15 = $value_14;
                    if (is_object($value_14)) {
                        $value_15 = $this->normalizer->normalize($value_14, 'json', $context);
                    } elseif (is_object($value_14)) {
                        $value_15 = $this->normalizer->normalize($value_14, 'json', $context);
                    }
                    $values_7->{$key_7} = $value_15;
                    continue;
                }
            }
            $data->{'links'} = $values_7;
        }
        if (null !== $object->getCallbacks()) {
            $values_8 = new \stdClass();
            foreach ($object->getCallbacks() as $key_8 => $value_16) {
                if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $key_8) && !is_null($value_16)) {
                    $value_17 = $value_16;
                    if (is_object($value_16)) {
                        $value_17 = $this->normalizer->normalize($value_16, 'json', $context);
                    } elseif (!is_null($value_16)) {
                        $values_9 = new \stdClass();
                        foreach ($value_16 as $key_9 => $value_18) {
                            if (preg_match('/^x-/', $key_9) && !is_null($value_18)) {
                                $values_9->{$key_9} = $value_18;
                                continue;
                            }
                        }
                        $value_17 = $values_9;
                    }
                    $values_8->{$key_8} = $value_17;
                    continue;
                }
            }
            $data->{'callbacks'} = $values_8;
        }
        foreach ($object as $key_10 => $value_19) {
            if (preg_match('/^x-/', $key_10)) {
                $data->{$key_10} = $value_19;
            }
        }

        return $data;
    }
}
