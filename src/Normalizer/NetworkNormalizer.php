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
class NetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\Network') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\Network) {
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
        $object = new \DockerPhpClient\Model\Network();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Scope')) {
            $object->setScope($data->{'Scope'});
        }
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'EnableIPv6')) {
            $object->setEnableIPv6($data->{'EnableIPv6'});
        }
        if (property_exists($data, 'IPAM')) {
            $object->setIPAM($this->denormalizer->denormalize($data->{'IPAM'}, 'DockerPhpClient\\Model\\IPAM', 'json', $context));
        }
        if (property_exists($data, 'Internal')) {
            $object->setInternal($data->{'Internal'});
        }
        if (property_exists($data, 'Attachable')) {
            $object->setAttachable($data->{'Attachable'});
        }
        if (property_exists($data, 'Ingress')) {
            $object->setIngress($data->{'Ingress'});
        }
        if (property_exists($data, 'Containers')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Containers'} as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'DockerPhpClient\\Model\\NetworkContainer', 'json', $context);
            }
            $object->setContainers($values);
        }
        if (property_exists($data, 'Options')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Options'} as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setOptions($values_1);
        }
        if (property_exists($data, 'Labels')) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setLabels($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getScope()) {
            $data->{'Scope'} = $object->getScope();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getEnableIPv6()) {
            $data->{'EnableIPv6'} = $object->getEnableIPv6();
        }
        if (null !== $object->getIPAM()) {
            $data->{'IPAM'} = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
        }
        if (null !== $object->getInternal()) {
            $data->{'Internal'} = $object->getInternal();
        }
        if (null !== $object->getAttachable()) {
            $data->{'Attachable'} = $object->getAttachable();
        }
        if (null !== $object->getIngress()) {
            $data->{'Ingress'} = $object->getIngress();
        }
        if (null !== $object->getContainers()) {
            $values = new \stdClass();
            foreach ($object->getContainers() as $key => $value) {
                $values->{$key} = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Containers'} = $values;
        }
        if (null !== $object->getOptions()) {
            $values_1 = new \stdClass();
            foreach ($object->getOptions() as $key_1 => $value_1) {
                $values_1->{$key_1} = $value_1;
            }
            $data->{'Options'} = $values_1;
        }
        if (null !== $object->getLabels()) {
            $values_2 = new \stdClass();
            foreach ($object->getLabels() as $key_2 => $value_2) {
                $values_2->{$key_2} = $value_2;
            }
            $data->{'Labels'} = $values_2;
        }
        return $data;
    }
}