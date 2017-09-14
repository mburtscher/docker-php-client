<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InfoResponse200RegistryConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\InfoResponse200RegistryConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\InfoResponse200RegistryConfig) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\InfoResponse200RegistryConfig();
        if (property_exists($data, 'IndexConfigs')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'IndexConfigs'} as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'DockerPhpClient\\Model\\InfoResponse200RegistryConfigIndexConfigsItem', 'json', $context);
            }
            $object->setIndexConfigs($values);
        }
        if (property_exists($data, 'InsecureRegistryCIDRs')) {
            $values_1 = array();
            foreach ($data->{'InsecureRegistryCIDRs'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInsecureRegistryCIDRs($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIndexConfigs()) {
            $values = new \stdClass();
            foreach ($object->getIndexConfigs() as $key => $value) {
                $values->{$key} = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'IndexConfigs'} = $values;
        }
        if (null !== $object->getInsecureRegistryCIDRs()) {
            $values_1 = array();
            foreach ($object->getInsecureRegistryCIDRs() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'InsecureRegistryCIDRs'} = $values_1;
        }
        return $data;
    }
}