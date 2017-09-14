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
class ImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\Image') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\Image) {
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
        $object = new \DockerPhpClient\Model\Image();
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'RepoTags')) {
            $values = array();
            foreach ($data->{'RepoTags'} as $value) {
                $values[] = $value;
            }
            $object->setRepoTags($values);
        }
        if (property_exists($data, 'RepoDigests')) {
            $values_1 = array();
            foreach ($data->{'RepoDigests'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoDigests($values_1);
        }
        if (property_exists($data, 'Parent')) {
            $object->setParent($data->{'Parent'});
        }
        if (property_exists($data, 'Comment')) {
            $object->setComment($data->{'Comment'});
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Container')) {
            $object->setContainer($data->{'Container'});
        }
        if (property_exists($data, 'ContainerConfig')) {
            $object->setContainerConfig($this->denormalizer->denormalize($data->{'ContainerConfig'}, 'DockerPhpClient\\Model\\ContainerConfig', 'json', $context));
        }
        if (property_exists($data, 'DockerVersion')) {
            $object->setDockerVersion($data->{'DockerVersion'});
        }
        if (property_exists($data, 'Author')) {
            $object->setAuthor($data->{'Author'});
        }
        if (property_exists($data, 'Config')) {
            $object->setConfig($this->denormalizer->denormalize($data->{'Config'}, 'DockerPhpClient\\Model\\ContainerConfig', 'json', $context));
        }
        if (property_exists($data, 'Architecture')) {
            $object->setArchitecture($data->{'Architecture'});
        }
        if (property_exists($data, 'Os')) {
            $object->setOs($data->{'Os'});
        }
        if (property_exists($data, 'OsVersion')) {
            $object->setOsVersion($data->{'OsVersion'});
        }
        if (property_exists($data, 'Size')) {
            $object->setSize($data->{'Size'});
        }
        if (property_exists($data, 'VirtualSize')) {
            $object->setVirtualSize($data->{'VirtualSize'});
        }
        if (property_exists($data, 'GraphDriver')) {
            $object->setGraphDriver($this->denormalizer->denormalize($data->{'GraphDriver'}, 'DockerPhpClient\\Model\\GraphDriverData', 'json', $context));
        }
        if (property_exists($data, 'RootFS')) {
            $object->setRootFS($this->denormalizer->denormalize($data->{'RootFS'}, 'DockerPhpClient\\Model\\ImageRootFS', 'json', $context));
        }
        if (property_exists($data, 'Metadata')) {
            $object->setMetadata($this->denormalizer->denormalize($data->{'Metadata'}, 'DockerPhpClient\\Model\\ImageMetadata', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getRepoTags()) {
            $values = array();
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data->{'RepoTags'} = $values;
        }
        if (null !== $object->getRepoDigests()) {
            $values_1 = array();
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'RepoDigests'} = $values_1;
        }
        if (null !== $object->getParent()) {
            $data->{'Parent'} = $object->getParent();
        }
        if (null !== $object->getComment()) {
            $data->{'Comment'} = $object->getComment();
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getContainer()) {
            $data->{'Container'} = $object->getContainer();
        }
        if (null !== $object->getContainerConfig()) {
            $data->{'ContainerConfig'} = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
        }
        if (null !== $object->getDockerVersion()) {
            $data->{'DockerVersion'} = $object->getDockerVersion();
        }
        if (null !== $object->getAuthor()) {
            $data->{'Author'} = $object->getAuthor();
        }
        if (null !== $object->getConfig()) {
            $data->{'Config'} = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getArchitecture()) {
            $data->{'Architecture'} = $object->getArchitecture();
        }
        if (null !== $object->getOs()) {
            $data->{'Os'} = $object->getOs();
        }
        if (null !== $object->getOsVersion()) {
            $data->{'OsVersion'} = $object->getOsVersion();
        }
        if (null !== $object->getSize()) {
            $data->{'Size'} = $object->getSize();
        }
        if (null !== $object->getVirtualSize()) {
            $data->{'VirtualSize'} = $object->getVirtualSize();
        }
        if (null !== $object->getGraphDriver()) {
            $data->{'GraphDriver'} = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
        }
        if (null !== $object->getRootFS()) {
            $data->{'RootFS'} = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $data->{'Metadata'} = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        return $data;
    }
}