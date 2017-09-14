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
class TaskSpecContainerSpecSecretsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\TaskSpecContainerSpecSecretsItem') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\TaskSpecContainerSpecSecretsItem) {
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
        $object = new \DockerPhpClient\Model\TaskSpecContainerSpecSecretsItem();
        if (property_exists($data, 'File')) {
            $object->setFile($this->denormalizer->denormalize($data->{'File'}, 'DockerPhpClient\\Model\\TaskSpecContainerSpecSecretsItemFile', 'json', $context));
        }
        if (property_exists($data, 'SecretID')) {
            $object->setSecretID($data->{'SecretID'});
        }
        if (property_exists($data, 'SecretName')) {
            $object->setSecretName($data->{'SecretName'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFile()) {
            $data->{'File'} = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getSecretID()) {
            $data->{'SecretID'} = $object->getSecretID();
        }
        if (null !== $object->getSecretName()) {
            $data->{'SecretName'} = $object->getSecretName();
        }
        return $data;
    }
}