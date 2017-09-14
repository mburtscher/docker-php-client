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
class VolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\Volume') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\Volume) {
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
        $object = new \DockerPhpClient\Model\Volume();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'Mountpoint')) {
            $object->setMountpoint($data->{'Mountpoint'});
        }
        if (property_exists($data, 'CreatedAt')) {
            $object->setCreatedAt($data->{'CreatedAt'});
        }
        if (property_exists($data, 'Status')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Status'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setStatus($values);
        }
        if (property_exists($data, 'Labels')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setLabels($values_1);
        }
        if (property_exists($data, 'Scope')) {
            $object->setScope($data->{'Scope'});
        }
        if (property_exists($data, 'Options')) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Options'} as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setOptions($values_2);
        }
        if (property_exists($data, 'UsageData')) {
            $object->setUsageData($this->denormalizer->denormalize($data->{'UsageData'}, 'DockerPhpClient\\Model\\VolumeUsageData', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getMountpoint()) {
            $data->{'Mountpoint'} = $object->getMountpoint();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getStatus()) {
            $values = new \stdClass();
            foreach ($object->getStatus() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Status'} = $values;
        }
        if (null !== $object->getLabels()) {
            $values_1 = new \stdClass();
            foreach ($object->getLabels() as $key_1 => $value_1) {
                $values_1->{$key_1} = $value_1;
            }
            $data->{'Labels'} = $values_1;
        }
        if (null !== $object->getScope()) {
            $data->{'Scope'} = $object->getScope();
        }
        if (null !== $object->getOptions()) {
            $values_2 = new \stdClass();
            foreach ($object->getOptions() as $key_2 => $value_2) {
                $values_2->{$key_2} = $value_2;
            }
            $data->{'Options'} = $values_2;
        }
        if (null !== $object->getUsageData()) {
            $data->{'UsageData'} = $this->normalizer->normalize($object->getUsageData(), 'json', $context);
        }
        return $data;
    }
}